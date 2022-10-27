<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnArchiveCreatorIdToArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archives', function (Blueprint $table) {
            $table->unsignedBigInteger('archive_creator_id');
            $table->foreign('archive_creator_id')->on('archive_creators')->references('id')->onUpdate('cascade')->onDelete('cascade');
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
            $table->dropColumn('archive_creator_id');
        });
    }
}
