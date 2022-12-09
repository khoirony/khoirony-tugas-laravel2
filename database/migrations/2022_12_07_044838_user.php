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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('email', 50)->unique();
            $table->text('password');
            $table->integer('role')->nullable();
            $table->boolean('aktif')->default(true);
            $table->integer('id_sekolah')->nullable();

            $table->timestamps();

            $table->foreign('id_sekolah')->references('id')->on('sekolahs');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
