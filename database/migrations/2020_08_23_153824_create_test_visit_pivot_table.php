<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestVisitPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_visit', function (Blueprint $table) {
            $table->bigInteger('test_id')->unsigned()->index();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->bigInteger('visit_id')->unsigned()->index();
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade');
            $table->primary(['test_id', 'visit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_visit');
    }
}
