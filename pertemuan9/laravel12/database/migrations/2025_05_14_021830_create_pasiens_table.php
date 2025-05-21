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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique()->required();
            $table->string('nama')->required();
            $table->date('tgl_lahir')->required();
            $table->enum('gender', ['L', 'P'])->required();
            $table->string('alamat')->required();
            $table->string('email')->unique()->required();
            $table->unsignedBigInteger('kelurahan_id'); // Add this line
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
