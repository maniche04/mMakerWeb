<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sourceId');
            $table->unsignedInteger('commodityId');
            $table->mediumText('title');
            $table->string('link');
            $table->dateTime('pubDate');
            $table->string('image');
            $table->longText('articlehtml');
            $table->longText('body');
            $table->smallInteger('evalFlag');
            $table->double('score',15,2);
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
        Schema::drop('news_articles');
    }
}
