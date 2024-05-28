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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('username_user');
            $table->string('password_user');
            $table->string('email_user');
            $table->string('no_telp_user');
            $table->string('slug_link');
            $table->enum('status_publish', ['Publish', 'Draft']);
            $table->enum('status_aktif', ['Aktif', 'Hapus']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
