<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mentor');
            $table->foreign('id_mentor')->references('id')->on('mentor')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_kelas')->unique();
            $table->integer('durasi_kelas')->comment('Durasi kelas dalam menit'); // Contoh penambahan komentar
            $table->timestamps();
            $table->index('id_mentor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign(['id_mentor']);
            $table->dropIndex(['id_mentor']);
        });

        Schema::dropIfExists('kelas');

         // Drop `mentor` table only after foreign key constraints are removed
         Schema::dropIfExists('mentor');
    }
};
