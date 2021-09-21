<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkiResortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ski_resorts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('weather', 100);
            $table->integer('temperature');
            $table->integer('snow_cover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ski_resorts');
    }
}