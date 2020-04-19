<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index()->comment('ユーザーid');
            $table->string('title', 256)->index()->comment('レビュータイトル');
            $table->text('review')->comment('口コミ内容');
            $table->integer('food_evaluation')->comment('料理評価');
            $table->integer('access_evaluation')->comment('アクセス評価');
            $table->integer('feeling_evaluation')->comment('雰囲気評価');
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
        Schema::dropIfExists('reviews');
    }
}
