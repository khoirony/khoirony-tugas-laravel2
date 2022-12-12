<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->text('konten');
            $table->integer('id_kategori');
            $table->integer('id_penulis');
            $table->string('thumbnail', 255)->nullable();
            $table->timestamps();
            
            $table->foreign('id_kategori')->references('id')->on('kategoris');
            $table->foreign('id_penulis')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
