<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTertiaryClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tertiary_classifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('secondary_classification_id');
            $table->string('code', 10)->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('secondary_classification_id')->on('secondary_classifications')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tertiary_classifications');
    }
}
