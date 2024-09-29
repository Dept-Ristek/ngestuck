<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function users()
    {
        return view('admin.users.index',[
            'title' => 'Users'
        ]);
    }

    public function categoriesIndex()
    {
        return view('admin.categories.index', [
            'title' => 'Categories'
        ]);
    }

    public function categoriesCreate()
    {
        return view('admin.categories.create', [
            'title' => 'Create Category'
        ]);
    }

    public function threadsIndex()
    {
        return view('admin.threads.index', [
            'title' => 'Threads'
        ]);
    }
}
