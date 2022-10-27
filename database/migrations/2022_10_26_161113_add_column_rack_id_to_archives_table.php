<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRackIdToArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archives', function (Blueprint $table) {
            $table->unsignedBigInteger('rack_id');
            $table->foreign('rack_id')->on('racks')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archives', function (Blueprint $table) {
            $table->dropColumn('rack_id');
        });
    }
}
