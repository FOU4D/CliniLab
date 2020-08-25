<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
    	        $table->id();
    	        $table->timestamps();
		$table->bigInteger('request_id')->unsigned();
                $table->foreign('request_id')->references('id')->on('requests');
                $table->string('title')->nullable();
                $table->enum('status', ['in progress', 'cancelled', 'rejected', 'completed'])->nullable();
                $table->json('results')->nullable();
                $table->text('report')->nullable();
                $table->text('notes')->nullable();
                $table->bigInteger('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users');

        });
	DB::statement('ALTER TABLE reports AUTO_INCREMENT = 10000000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
