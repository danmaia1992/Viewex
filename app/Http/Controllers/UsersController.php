<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
    public function show(Request $request)
    {
    	return view('page.home');
    }

    public function profile(Request $request, User $user)
    {
    	$user->username = $request->input('name');
    	$user->save();
    	return view('page.profile', compact('user'));
    }
}
