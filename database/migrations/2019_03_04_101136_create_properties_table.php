<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_use')->nullable();
            $table->string('price')->nullable();
            $table->string('roi')->nullable();
            $table->string('duration')->nullable();
            $table->string('slot')->nullable();
            $table->string('slot_left')->nullable();
            $table->string('slug')->nullable();
            $table->string('active')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
