<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('gia_goc')->nullable();
            $table->string('gia_khuyen_mai')->nullable();
            $table->string('mo_ta_ngan')->nullable();
            $table->string('mo_ta_chi_tiet')->nullable();
            $table->string('avatar')->nullable();
            $table->string('gallery')->nullable();
            $table->string('id_nguoi_dat')->nullable();
            $table->string('id_nguoi_dat')->nullable();
            $table->string('id_nguoi_dat')->nullable();
            $table->string('id_nguoi_dat')->nullable();
            $table->string('ban_chay')->nullable();
            $table->string('yeu_thich')->nullable();
            $table->string('hot')->nullable();
            $table->string('flash_sale')->nullable();
            $table->string('address')->nullable();


            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
