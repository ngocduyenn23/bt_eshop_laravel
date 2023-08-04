<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SanPham extends Model
{
    use HasFactory;
    protected $fillable = [
        
        "san_pham",
        "gia",
        "chi_tiet",
        "anh_bia",
        "id_nguoi_tao",
        "id_danh_muc",

    ];

    //cấu hình liên kết khóa ngoại
    public function danh_muc() :BelongsTo{

        return $this->belongsTo(DanhMuc::class, "id_danh_muc", "id");
    }
}
