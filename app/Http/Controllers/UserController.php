<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $userdata = User::all();
    return view('admin.viewuser', compact('userdata'));
    }
}
