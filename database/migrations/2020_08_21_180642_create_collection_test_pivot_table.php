<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionTestPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_test', function (Blueprint $table) {
            $table->bigInteger('collection_id')->unsigned()->index();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->bigInteger('test_id')->unsigned()->index();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->primary(['collection_id', 'test_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_test');
    }
}
