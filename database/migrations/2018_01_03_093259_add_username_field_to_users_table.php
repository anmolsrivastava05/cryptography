<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('aadhar')->unique();
            $table->string('contact')->unique();
            $table->string('secret_answer');
            $table->string('dob');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('aadhar');
            $table->dropColumn('contact');
            $table->dropColumn('secret_answer');
            $table->dropColumn('dob');
        });
    }
}
