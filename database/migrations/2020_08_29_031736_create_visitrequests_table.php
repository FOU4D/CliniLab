<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitrequests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('test_id')->unsigned()->index();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->bigInteger('visit_id')->unsigned()->index();
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade');

            $table->text('notes')->nullable();


        });

            DB::statement('ALTER TABLE requests AUTO_INCREMENT = 10000000;');



     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitrequests');
    }
}
