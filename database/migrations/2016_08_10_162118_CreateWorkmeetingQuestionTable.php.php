<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkmeetingQuestionTable.php extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workmeeting_question', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('workmeeting_id')->unsigned()->nullable();
            $table->foreign('workmeeting_id')
                  ->references('id')->on('workmeeting')
                  ->onDelete('cascade');
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workmeeting_question');
    }
}
