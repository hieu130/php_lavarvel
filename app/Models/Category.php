<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    //protected $primaryKey = "id"; //nếu là cột  id thi không cần khai báo
    //protected $primaryKey = "int"; //nếu là int thì cũng k cần khai báo
    protected $fillable = [
        "name"
    ];
    //public $timestamps = true; //mặc định là true -> tự động cập nhật tgian vào 2 cột create at và update up

}
