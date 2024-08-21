<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoreServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('more_services', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('title_eng');
            $table->string('description');
            $table->string('description_eng');
            $table->integer('arrangement')->nullable();
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
        Schema::dropIfExists('more_services');
    }
}
