<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_databases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('Calories');
            $table->decimal('Fat', $precision = 3, $scale = 2);
            $table->decimal('Protein', $precision = 4, $scale = 2);
            $table->decimal('Carbohydrate', $precision = 4, $scale = 2);
            $table->decimal('Fiber', $precision = 3, $scale = 1);
            $table->decimal('Water', $precision = 3, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_databases');
    }
}
