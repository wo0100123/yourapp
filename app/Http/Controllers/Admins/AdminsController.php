<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function login()
    {
    	return view('admin.login');
    }
    public function index()
    {
    	return view('admin.index');
    }
    public function welcome()
    {
    	return view('admin.welcome');
    }
    
}
