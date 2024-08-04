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
        Schema::create('kelas_paket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paket');
            $table->foreign('id_paket')->references('id')->on('paket_langganan')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

            $table->index('id_paket');
            $table->index('id_kelas');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelas_paket', function (Blueprint $table) {
            $table->dropForeign(['id_paket']);
            $table->dropForeign(['id_kelas']);
            $table->dropIndex(['id_paket']);
            $table->dropIndex(['id_kelas']);
        });

        Schema::dropIfExists('kelas_paket');
    }
};
