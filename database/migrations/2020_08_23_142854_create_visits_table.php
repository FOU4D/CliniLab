<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('individual_id')->unsigned();
            $table->text('notes')->nullable();
            $table->foreign('individual_id')->references('id')->on('individuals');
	    $table->string('referenced_by')->nullable();
        });
            DB::statement('ALTER TABLE visits AUTO_INCREMENT = 10000000;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
