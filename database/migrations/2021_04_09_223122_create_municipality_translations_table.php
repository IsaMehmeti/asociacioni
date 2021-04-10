<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipality_translations', function (Blueprint $table) {
             $table->string('locale')->index();
             // Foreign key to the main model
            $table->unsignedBigInteger('municipality_id');
            $table->unique(['municipality_id', 'locale']);
            $table->foreign('municipality_id')->on('municipalities')->references('id')->onDelete('cascade');
            //fields to be translated
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipality_translations');
    }
}
