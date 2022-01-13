<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string("thumb");
            $table->string('price');
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->drop("thumb");
            $table->drop('price');
            $table->drop('series');
            $table->drop('sale_date');
            $table->drop('type');
        });
    }
}
