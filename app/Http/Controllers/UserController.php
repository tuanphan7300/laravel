<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        return view('user');
    }
    function getAddUser() {
        return view('add_user');
    }
    function getEditUser() {
        return view('edit_user');
    }
}
