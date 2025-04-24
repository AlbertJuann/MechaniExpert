<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use App\Models\Article;
use App\Models\User;
use App\Models\VideoCategory;


class PageController extends Controller
{
    public function index_home(){
        $title = "Home | MechaniExpert";
        return view('index', compact('title'));
    }

    public function index_login(){
        $title = "Login | MechaniExpert";
        return view('pages.login', compact('title'));
    }

    public function index_register(){
        $title = "Register  | MechaniExpert";
        return view('pages.register', compact('title'));
    }

    public function index_forgot_password(){
        $title = "Forgot Password  | MechaniExpert";
        return view('pages.forgot-password', compact('title'));
    }

    public function index_profile(){
        $title = "Profile | MechaniExpert";
        $user = Auth::user();
        return view('pages.profile', compact('title', 'user'));
    }

    public function index_edit_profile(){
        $title = "Edit Profile | MechaniExpert";
        $user = Auth::user();
        return view('pages.edit-profile', compact('title', 'user'));
    }

    public function index_edit_password(){
        $title = "Edit Password | MechaniExpert";
        return view('pages.edit-password', compact('title'));
    }

    public function index_videos(){
        $title = "Videos | MechaniExpert";
        $categories = VideoCategory::all();
        return view('pages.video-category', compact('title', 'categories'));
    }

    public function index_video_list($id){
        $title = "Video List | MechaniExpert";
        $videos = Video::where('module_id', $id)->get();
        return view('pages.video-list', compact('title', 'videos'));
    }

    public function index_video($id){
        $video = Video::findOrFail($id);
        $title = $video->title . " | MechaniExpert";
        $categoryId = $video->category_id;
        return view('pages.video', compact('title', 'video', 'categoryId'));
    }

    public function index_articles(){
        $title = "articles | MechaniExpert";
        $articles = Article::paginate(6);
        return view('pages.article-homepage', compact('title', 'articles'));
    }

    public function index_article($slug){
        $article = Article::where('slug', $slug)->firstOrFail();
        $title = $article->title . " | MechaniExpert";
        return view('pages.article', compact('title', 'article'));
    }

    // Admin Section
    public function index_dashboard(){
        $title = "Dashboard | MechaniExpert";
        $videoCount = Video::count();
        $articleCount = Article::count();
        $userCount = User::count();
        return view('admin.dashboard', compact('title', 'videoCount', 'articleCount', 'userCount'));
    }

    public function index_user_control(){
        $title = "User Dashboard | MechaniExpert";
        $users = User::get();
        return view('admin.user-control', compact('title', 'users'));
    }

    public function index_article_control(){
        $title = "Article Dashboard | MechaniExpert";
        $articles = Article::get();
        return view('admin.article-control', compact('title', 'articles'));
    }   

    public function index_video_control(){
        $title = "Video Dashboard | MechaniExpert";
        $videos = Video::with('category')->get();
        return view('admin.video-control', compact('title', 'videos'));
    }

    public function index_video_category_control(){
        $title = "Video Category Dashboard | MechaniExpert";
        $categories = VideoCategory::get();
        return view('admin.video-category-control', compact('title', 'categories'));
    }

    public function index_add_article(){
        $title = "Add Article | MechaniExpert";
        return view('admin.add-article', compact('title'));
    }

    public function index_edit_article($id){
        $title = "Edit Article | MechaniExpert";
        $article = Article::findOrFail($id);
        return view('admin.edit-article', compact('title', 'article'));
    }

    public function index_add_video(){
        $title = "Add Video | MechaniExpert";
        $categories = VideoCategory::all();
        return view('admin.add-video', compact('title', 'categories'));
    }

    public function index_edit_video($id){
        $title = "Edit Video | MechaniExpert";
        $video = Video::findOrFail($id);
        $categories = VideoCategory::all();
        return view('admin.edit-video', compact('title', 'video', 'categories'));
    }

    public function index_add_video_category(){
        $title = "Add Video Category | MechaniExpert";
        return view('admin.add-video-category', compact('title'));
    }
    
    public function index_edit_video_category($id){
        $title = "Edit Video Category | MechaniExpert";
        $category = VideoCategory::findOrFail($id);
        return view('admin.edit-video-category', compact('title', 'category'));
    }

    public function index_add_user(){
        $title = "Add User | MechaniExpert";
        return view('admin.add-user', compact('title'));
    }

    public function index_edit_user($id){
        $title = "Edit User | MechaniExpert";
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('title', 'user'));
    }
}
