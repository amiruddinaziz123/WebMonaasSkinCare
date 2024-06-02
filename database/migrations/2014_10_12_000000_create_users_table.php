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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp');
            $table->string('slug_link');
            $table->enum('status_publish', ['Publish', 'Draft']);
            $table->enum('status_aktif', ['Aktif', 'Hapus']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
