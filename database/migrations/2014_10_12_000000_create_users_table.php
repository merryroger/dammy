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
            $table->string('name')->default('');
            $table->string('email')->unique()->default('');
            $table->string('passhash')->nullable()->default(null);
            $table->string('checkhash')->unique()->nullable()->default(null);
            $table->set('roles', ['master', 'admin', 'manager', 'guest'])->default('guest');
            $table->string('userdir')->nullable()->default(null);
            $table->tinyInteger('tries')->unsigned()->default(3);
            $table->dateTime('valid_till')->default('2000-01-01 00:00:00');
            $table->enum('status', ['invalid', 'frozen', 'verified'])->default('invalid');
            $table->boolean('off')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        (new UserSeeder())->run();
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
