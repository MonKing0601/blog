<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArtIdToVisitorRegistry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitor_registry', function (Blueprint $table) {

            $table->integer('art_id')->unsigned()->index();

            $table->foreign('art_id')->references('id')->on('article')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visitor_registry', function (Blueprint $table) {
            //
        });
    }
}
