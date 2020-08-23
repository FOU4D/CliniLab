<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionVisitPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_visit', function (Blueprint $table) {
            $table->bigInteger('collection_id')->unsigned()->index();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->bigInteger('visit_id')->unsigned()->index();
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade');
            $table->primary(['collection_id', 'visit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_visit');
    }
}
