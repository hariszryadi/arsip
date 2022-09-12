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
            $table->string('created_by', 1)->comment('1. Perangkat Daerah, 2. Desa, 3. BUMD, 4. Perorangan, 5. Ormas');
            $table->string('file_number');
            $table->text('description');
            $table->string('level', 1)->comment('1. Asli, 2. Copy, 3. Pertinggal, 4. Salinan');
            $table->string('period');
            $table->string('type', 1)->comment('1. Statis, 2. Inaktiv, 3. Vital');
            $table->string('final_retention', 1)->comment('1. Musnah, 2. Permanen');
            $table->unsignedBigInteger('primary_classification_id');
            $table->string('location');
            $table->string('comment');
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
        Schema::dropIfExists('archives');
    }
}
