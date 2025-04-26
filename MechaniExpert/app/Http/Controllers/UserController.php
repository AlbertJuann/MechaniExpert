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
use \Illuminate\Support\Facades\Password;

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

    public function showResetForm($token)
    {
        return view('pages.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        } else {
            return back()->withErrors(['email' => [__($status)]]);
        }
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with(['status' => __($status)]);
        } else {
            return back()->withErrors(['email' => __($status)]);
        }
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
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId()
                ],[
                    'username' => $user->getId(),
                    'name' => $user->name,
                    'role' => 0,
                    'phone' => null,
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
            } else{
                User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId()
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }
            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        } catch (\Throwable $th){
            return redirect()->route('login')->withErrors(['msg' => 'Google login failed. Please try again.']);
        }
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user_control')->with('success', 'User berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8',
            'role' => 'required|integer|in:0,1',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('user_control')->with('success', 'User berhasil diperbarui.');
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
