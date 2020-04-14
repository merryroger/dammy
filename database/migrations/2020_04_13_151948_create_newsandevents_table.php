<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsandeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsandevents', function (Blueprint $table) {
            $table->id();
            $table->string('destination')->unique()->default('');
            $table->timestamps();
            $table->softDeletes();
        });

        (new NewsandeventSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsandevents');
    }
}
