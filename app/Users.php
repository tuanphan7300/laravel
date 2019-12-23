<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //kết nối đến bảng users
    protected $table='users';

    //mặc định khóa chính là trường id, nếu khóa chính là khác
    //thì dùng
    //protected $primaryKey='tên khóa chính';
    //khai báo nếu không có 2 trường thời gian
    //public $timestamps=false;
}
