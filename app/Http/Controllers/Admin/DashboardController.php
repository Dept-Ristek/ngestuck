<?php

namespace App\Http\Controllers\Admin;

use Active;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __contruct()
    {
        return $this->middleware([IsAdmin::class, Authenticate::class]);
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin.dashboard.index', $data);
    }

    public function getActiveUser()
    {
        $data = [
            'users' => Active::users()->get(),
            'title' => 'Active User'
        ];
        
        return view('admin.users.index', $data);
    }
}
