<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;

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
    function getWelcome() {
        return view('welcome');
    }
    function postAddUser(AddUserRequest $r) {
        // $r->validate([
        //     'full'=>'required|min:5',
        //     'phone'=>'required|min:5|numeric',
        //     'address'=>'required',
        //     'id_number'=>'required|numeric'
        // ],[
        //     'full.required'=>'Họ Tên không được để trống',
        //     'full.min'=>'Họ tên ít nhất 5 ký tự',
        //     'phone.required'=>'Số điện thoại không được để trống',
        //     'phone.min'=>'Số điện thoại ít nhất 5 ký tự',
        //     'phone.numeric'=>'Số điện thoại phải dạng số',
        //     'address.required'=>'địa chỉ không được để trống',
        //     'id_number.required'=>'Số CMT không được để trống',
        //     'id_number.numeric'=>'Số CMT phải dạng số',
        // ]);
    }
    function postEditUser(Request $r) {
        dd($r->all());
    }
}
