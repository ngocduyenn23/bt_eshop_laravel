<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng tên sản phẩm
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id(); //ko âm
            $table->string("san_pham",200)->nullable() ;
            $table->decimal("gia",20,0)->nullable();
            $table->text("chi_tiet")->nullable();
            $table->string("anh_bia",500)->nullable();
            $table->bigInteger("id_nguoi_tao")
            ->nullable()
            ->index("idx_san_pham_id_nguoi_tao");   //idx->index
            $table->bigInteger("id_danh_muc")
            ->nullable()
            ->index("idx_san_pham_id_danh_muc");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
