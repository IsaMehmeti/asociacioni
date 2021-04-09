<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('official_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('official_id');
            $table->unique(['official_id', 'locale']);
            $table->foreign('official_id')->on('officials')->references('id')->onDelete('cascade');

            //fields to be translated
            $table->string('municipality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('official_translations');
    }
}
