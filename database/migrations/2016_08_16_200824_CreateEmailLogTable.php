<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('workmeeting_id')->unsigned()->nullable();
            $table->foreign('workmeeting_id')
                  ->references('id')->on('workmeeting')
                  ->onDelete('cascade');
            $table->integer('speakers_id')->unsigned()->nullable();
            $table->foreign('speakers_id')
                  ->references('id')->on('speakers')
                  ->onDelete('set null');
            $table->text('assistant_email')->nullable();
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
        Schema::drop('email_log');
    }
}
