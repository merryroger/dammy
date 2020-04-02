<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('role', ['admin', 'user', 'guest'])->default('guest');
            $table->string('gen_view')->default('');
            $table->string('template')->default('');
            $table->boolean('hidden')->default(false);
            $table->boolean('off')->default(false);
            $table->timestamps();
            $table->unique(['name', 'role']);
        });

        (new SectionSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
