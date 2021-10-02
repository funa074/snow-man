<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSkiResortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ski_resorts', function (Blueprint $table) {
            $table->string('weather', 100)->nullable(true)->change();
            $table->integer('temperature')->nullable(true)->change();
            $table->integer('snow_cover')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ski_resorts', function (Blueprint $table) {
            $table->string('weather', 100)->nullable(false)->change();
            $table->integer('temperature')->nullable(false)->change();
            $table->integer('snow_cover')->nullable(false)->change();
        });
    }
}