<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    // tạo bảng bảng nằm trong fillable
    protected $fillable = [
        
        "ten_danh_muc" 
    ];
}
