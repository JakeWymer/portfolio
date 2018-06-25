<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->text('tagline')->nullable();
            $table->string('image')->nullable();
            $table->text('par-one')->nullable();            
            $table->text('par-two')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('tagline');
            $table->dropColumn('image');
            $table->dropColumn('par-one');
            $table->dropColumn('par-two');
        });
    }
}
