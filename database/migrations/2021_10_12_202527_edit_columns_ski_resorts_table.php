<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsSkiResortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ski_resorts', function (Blueprint $table) {
            $table->decimal('lat', 9, 7);
            $table->decimal('lon', 10, 7);
            $table->dropColumn(['weather', 'temperature', 'snow_cover']);
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
            $table->string('weather', 100)->nullable(true);
            $table->integer('temperature')->nullable(true);
            $table->integer('snow_cover')->nullable(true);
            $table->dropColumn(['lat', 'lon']);
        });
    }
}