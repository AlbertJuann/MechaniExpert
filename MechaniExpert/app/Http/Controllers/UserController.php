<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\Rule;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    // I. Registration (Store)
    public function register(Request $request){
        $validate = $request->validate([
            'username' => 'required|unique:users|max:30',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->role = 0;
        $user->name = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }

    // Store method for admin add user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:30',
            'name' => 'required|string|max:255',
            'role' => 'required|integer|in:0,1',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->username = $validated['username'];
        $user->name = $validated['name'];
        $user->role = $validated['role'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->route('user_control')->with('success', 'User berhasil ditambahkan.');
    }

    // II. Log in
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user){
        return redirect()->intended('home');
    }

    // III. Change Password
    public function perform_change_password(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required',
        ]);
        if(!Hash::check($request->oldpassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        return back()->with("status", "Password changed successfully!");
    }

    // IV. Log Out
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended('home');
    }

    // Va. Login with Google
    public function loginWithGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // Vb. Callback with Google
    public function callbackFromGoogle(){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                
                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId()
                ],[
                    'username' => $user->getId(),
                    'name' => $user->name,
                    'role' => 0,
                    'phone' => 'null',
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
            } else{
                $saveUser = User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId()
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }
            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        } catch (\throwable $th){
            throw $th;
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user_control')->with('success', 'User berhasil dihapus.');
    }
}
