<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaloriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calories', function (Blueprint $table) {
            $table->bigIncrements('c_id');
            $table->string('c_gender');
            $table->string('c_age')->unique();
            $table->string('c_weight')->nullable();
            $table->string('c_height')->nullable();
            $table->enum('c_exercise_level', ['Little/No exercise', 'Low activity (exercise 1-3 times/week)', 'Active (daily exercise or intense exercise 3-4 times/week)', 'High activity (intense exercise 6-7 times/week)', 'Very high activity (very intense exercise daily, or physical job)'])->nullable();
            $table->string('c_maintain_weight')->nullable();
            $table->string('c_weight_loss')->nullable();
            $table->string('c_weight_gain')->nullable();
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
        Schema::dropIfExists('calories');
    }
}
