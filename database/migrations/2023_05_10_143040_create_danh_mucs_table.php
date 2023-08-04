<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('danh_mucs', function (Blueprint $table) {  //danh muctrong bảng mysql
            $table->id();       //cấu trúc bảng
            $table->string("ten_danh_muc",200)->nullable();           //tên danh mục ,nullable->được phép null
            $table->timestamps();    //cấu trúc bảng

        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('danh_mucs');
    }
};
