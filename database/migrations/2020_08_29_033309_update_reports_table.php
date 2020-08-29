<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::disableForeignKeyConstraints();

Schema::table('reports', function (Blueprint $table) {
    $table->dropForeign(['request_id']);
$table->foreign('request_id')->references('id')->on('visitrequests');
});

Schema::enableForeignKeyConstraints();


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
