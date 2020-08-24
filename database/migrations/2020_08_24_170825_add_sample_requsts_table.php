<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSampleRequstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            //

                $table->enum('sample_status', ['Received', 'Accepted', 'Rejected'])->nullable();
                $table->boolean('sample_collected')->nullable();
                $table->text('sample_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            //
	    $table->dropColumn(['sample_status']);
            $table->dropColumn(['sample_collected']);
            $table->dropColumn(['sample_notes']);
        });
    }
}
