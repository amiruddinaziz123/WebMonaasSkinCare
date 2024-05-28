<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('foto_treatment')->nullable();
            $table->string('nama_treatment');
            $table->text('description_treatment');
            $table->decimal('harga_treatment', 10,3);
            $table->string('slug_link');
            $table->timestamps();
        });

        Schema::table('treatments', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('treatments');

        // Schema::table('treatments', function (Blueprint $table) {
        //     $table->dropSoftDeletes();
        // });
    }
};
