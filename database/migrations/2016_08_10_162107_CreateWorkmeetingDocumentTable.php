<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkmeetingDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workmeeting_document', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('workmeeting_id')->unsigned()->nullable();
            $table->foreign('workmeeting_id')
                  ->references('id')->on('workmeeting')
                  ->onDelete('cascade');
            $table->text('title')->nullable();
            $table->text('url')->nullable();
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
        Schema::drop('workmeeting_document');
    }
}
