<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndividualInstitutionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_institution', function (Blueprint $table) {
            $table->bigInteger('individual_id')->unsigned()->index();
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->bigInteger('institution_id')->unsigned()->index();
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
            $table->primary(['individual_id', 'institution_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_institution');
    }
}
