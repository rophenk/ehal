<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReceiver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiver', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('description')->nullable();
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
        Schema::drop('receiver');
    }
}
