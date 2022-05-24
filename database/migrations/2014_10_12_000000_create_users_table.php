<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name', 20);
            $table->string('l_name', 20);
            $table->string('email')->unique();
            $table->string('designation', 20);
            $table->string('employee_id', 20);
            $table->string('phone', 20);
            $table->string('username', 20);
            $table->string('password');
            $table->boolean('can_read')->default(false);
            $table->boolean('can_write')->default(false);
            $table->boolean('can_delete')->default(false);
            $table->string('status', 15);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
