<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index_home(){
        $title = "Home | MechaniExpert";
        return view('pages.home', compact('title'));
    }

    public function index_login(){
        $title = "Login | MechaniExpert";
        return view('pages.login', compact('title'));
    }

    public function index_register(){
        $title = "Register";
        return view('pages.register', compact('title'));
    }

    public function index_profile(){
        $title = "Profile | MechaniExpert";
        return view('pages.profile', compact('title'));
    }

    public function index_edit_profile(){
        $title = "Edit Profile | MechaniExpert";
        return view('pages.edit-profile', compact('title'));
    }

    public function index_edit_password(){
        $title = "Edit Password | MechaniExpert";
        return view('pages.edit-password', compact('title'));
    }

    public function index_videos(){
        $title = "Videos | MechaniExpert";
        return view('pages.video-category', compact('title'));
    }

    public function index_video_list(){
        $title = "Video List | MechaniExpert";
        return view('pages.video-list', compact('title'));
    }

    public function index_video(){
        $title = "Video | MechaniExpert";
        return view('pages.video', compact('title'));
    }

    public function index_articles(){
        $title = "articles | MechaniExpert";
        return view('pages.articles', compact('title'));
    }

    public function index_article(){
        $title = "article | MechaniExpert";
        return view('pages.article', compact('title'));
    }

    // Admin Section
    public function index_dashboard(){
        $title = "Dashboard | MechaniExpert";
        return view('admin.dashboard', compact('title'));
    }

    public function index_user_control(){
        $title = "User Dashboard | MechaniExpert";
        return view('admin.user-control', compact('title'));
    }

    public function index_article_dashboard(){
        $title = "Article Dashboard | MechaniExpert";
        return view('admin.article-control', compact('title'));
    }

    public function index_video_dashboard(){
        $title = "Video Dashboard | MechaniExpert";
        return view('admin.video-control', compact('title'));
    }

    public function index_video_category_dashboard(){
        $title = "Video Category Dashboard | MechaniExpert";
        return view('admin.video-category-control', compact('title'));
    }

    public function index_add_article(){
        $title = "Add Article | MechaniExpert";
        return view('admin.add-article', compact('title'));
    }

    public function index_edit_article(){
        $title = "Edit Article | MechaniExpert";
        return view('admin.edit-article', compact('title'));
    }

    public function index_add_video(){
        $title = "Add Video | MechaniExpert";
        return view('admin.add-video', compact('title'));
    }

    public function index_edit_video(){
        $title = "Edit Video | MechaniExpert";
        return view('admin.edit-video', compact('title'));
    }

    public function index_add_video_category(){
        $title = "Add Video Category | MechaniExpert";
        return view('admin.add-video-category', compact('title'));
    }

    public function index_edit_video_category(){
        $title = "Edit Video Category | MechaniExpert";
        return view('admin.edit-video-category', compact('title'));
    }

    public function index_add_user(){
        $title = "Add User | MechaniExpert";
        return view('admin.add-user', compact('title'));
    }

    public function index_edit_user(){
        $title = "Edit User | MechaniExpert";
        return view('admin.edit-user', compact('title'));
    }
}
