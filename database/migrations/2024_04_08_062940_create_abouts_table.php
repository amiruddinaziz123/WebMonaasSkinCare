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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('intro');
            $table->text('reason');
            $table->string('icon1');
            $table->text('tittle_icon1');
            $table->text('isi_icon1');
            $table->string('icon2');
            $table->text('tittle_icon2');
            $table->text('isi_icon2');
            $table->string('icon3');
            $table->text('tittle_icon3');
            $table->text('isi_icon3');
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
