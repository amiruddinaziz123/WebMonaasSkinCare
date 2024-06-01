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
            $table->timestamps();
            $table->string('foto_product')->nullable();
            $table->text('nama_product');
            $table->text('description_product');
            $table->decimal('harga_product', 10,3);
            $table->enum('status_aktif', ['aktif', 'hapus']);
            $table->text('slug_link');

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
