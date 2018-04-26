<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryToWorkmeeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workmeeting', function($table) {
            $table->string('category')->after('uuid')->default('workmeeting');
            $table->index('category');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workmeeting', function($table) {
            $table->dropColumn('category');
        });
    }
}
