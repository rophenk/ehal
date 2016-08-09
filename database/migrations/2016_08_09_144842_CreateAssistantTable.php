<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistant', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('speakers_id')->unsigned()->nullable();
            $table->foreign('speakers_id')
                  ->references('id')->on('speakers')
                  ->onDelete('set null');
            $table->string('name');
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('phone')->nullable();
            $table->string('roles')->nullable();
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
        Schema::drop('assistant');
    }
}
