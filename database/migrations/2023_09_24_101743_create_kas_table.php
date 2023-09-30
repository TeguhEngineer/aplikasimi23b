<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->enum('minggu1',['sudah','belum'])->default('belum');
            $table->enum('minggu2',['sudah','belum'])->default('belum');
            $table->enum('minggu3',['sudah','belum'])->default('belum');
            $table->enum('minggu4',['sudah','belum'])->default('belum');
            $table->string('bulandantahun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kas');
    }
}
