<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePhonesaddressesInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

Schema::table('institutions', function (Blueprint $table) {
    $table->json('address')->nullable();
    $table->json('phones')->nullable();
    $table->string('phone', 20);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
Schema::table('institutions', function (Blueprint $table) {
    $table->dropColumn('address');
    $table->dropColumn('phone');
    $table->dropColumn('phones');
});
    }
}
