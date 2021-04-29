<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Article;
use App\Contact;
use App\User;

class viewController extends Controller
{
    public function index()
    {
        $users = User::count();
        $articles = Article::count();
        $contacts = Contact::count();
        return view('Admin.index', compact('users', 'articles', 'contacts'));
    }

    public function article()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(2);
        return view('Admin.viewArticle', compact('articles'));
    }

    public function admin()
    {
        $admins = Admin::all();
        return view('Admin.viewAdmin', compact('admins'));
    }

    public function user()
    {
        $users = User::orderBy('created_at')->paginate(6);
        return view('Admin.viewUser', compact('users'));
    }

    public function service()
    {

        return view('Admin.viewService');
    }
}
