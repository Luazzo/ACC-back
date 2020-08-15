<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPromoCompagnyRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promos', function (Blueprint $table) {
            $table->bigInteger('compagny_id')->unsigned();
            $table->foreign('compagny_id')->references('id')->on('compagnies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promos', function (Blueprint $table) {
            $table->dropForeign(['compagny_id']);
        });

        Schema::table('promos', function (Blueprint $table) {
            $table->bigInteger('compagny_id')->change();
        });
    }
}
