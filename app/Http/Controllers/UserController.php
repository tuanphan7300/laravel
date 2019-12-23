<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Users;

class UserController extends Controller
{
    function getUser() {
        //lấy tất cả bản ghi trong database
        //tenModel::all;
        //để phân trang sử dụng paginate(số bản ghi trên 1 trang)
        $data['Users']=Users::paginate(10);

        return view('user',$data);
    }
    function getAddUser() {
        return view('add_user');
    }
    function getEditUser($idUser) {
        $data['user']=Users::find($idUser);// lấy ra 1 bản ghi theo id
        return view('edit_user',$data);
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
        //tạo bản ghi trong database
        $user=new Users;
        //gán giá trị các trường trong database
        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->address;
        $user->id_number=$r->id_number;
        //lưu giá trị vào database
        $user->save();
        return redirect('user')->with('thongbao','đã thêm thành công');//chuyển hướng đến trang
    }
    function postEditUser(EditUserRequest $r,$idUser) {
        // dd($r->all());
        //tìm bản ghi theo id sau đó điền dữ liệu vào bản ghi
        $user=Users::find($idUser);
        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->phone;
        $user->id_number=$r->id_number;
        $user->save();
        return redirect('user')->with('thongbao','Đã sửa thành công');

    }
    function delUser($idUser){
        Users::find($idUser)->delete();
        return redirect('user')->with('thongbao','Đã xóa thành công');
    }
    function Search(request $r){
        // dd($r->all());
        $data['Users']=Users::where('full','like','%'.$r->search.'%')
        ->orWhere('phone','like','%'.$r->search.'%')
        ->orWhere('address','like','%'.$r->search.'%')
        ->orWhere('id_number','like','%'.$r->search.'%')
        ->paginate();
        return view('user',$data);
    }
}
