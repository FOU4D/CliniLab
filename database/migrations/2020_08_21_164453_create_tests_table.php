<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('code', 64)->unique();
            $table->text('description')->nullable();
            $table->text('preparation')->nullable();
            $table->text('normal_values')->nullable();
            $table->integer('turnaround_time')->nullable();
            $table->enum('turnaround_interval', ['Minutes', 'Hours', 'Days', 'Weeks', 'Months'])->nullable();
            $table->boolean('isActive');
            $table->bigInteger('specimen_id')->unsigned()->nullable();
            $table->foreign('specimen_id')->references('id')->on('specimens');
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
        Schema::dropIfExists('tests');
    }
}
