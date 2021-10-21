<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->comment('ユーザーID'); // 1対多リレーション（整数しか入らないのでunsignedBigIntegerを使用）
            $table->date('skiing_date')->comment('滑走日');
            $table->string('ski_resort', 30)->comment('スキー場名');
            $table->text('body', 500)->comment('本文'); 
            $table->string('image_file_name',100)->comment('画像ファイル名');
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
        Schema::dropIfExists('records');
    }
}