<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('fraction_id')->unsigned()->nullable();
            $table->foreign('fraction_id')
                  ->references('id')->on('fraction')
                  ->onDelete('set null');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('fraction_leader')->nullable();
            $table->string('type')->nullable();
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
        Schema::drop('speakers');
    }
}
