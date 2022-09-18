<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('mapping_id');
            $table->string('year', 4);
            $table->integer('amount');
            $table->string('dev_level', 1)->comment('1. Asli, 2. Copy, 3. Salinan, 4. Pertinggal, 5. Asli/Copy');
            $table->string('location');
            $table->string('loc_floor');
            $table->enum('loc_status', ['S', 'D']);
            $table->string('loc_rack');
            $table->string('loc_box');
            $table->string('file')->nullable();
            $table->string('officer');
            $table->string('status', 1)->comment('1. Statis, 2. Inaktif, 3. Vital');
            $table->timestamps();

            $table->foreign('mapping_id')->on('mapping')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archives');
    }
}
