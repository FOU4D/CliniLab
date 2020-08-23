<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIdcountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement('ALTER TABLE visits AUTO_INCREMENT = 10000000;');
      DB::statement('ALTER TABLE tests AUTO_INCREMENT = 10000000;');
      DB::statement('ALTER TABLE collections AUTO_INCREMENT = 10000000;');
      DB::statement('ALTER TABLE specimens AUTO_INCREMENT = 10000000;');
      DB::statement('ALTER TABLE individuals AUTO_INCREMENT = 10000000;');
      DB::statement('ALTER TABLE institutions AUTO_INCREMENT = 10000000;');
      //DB::statement('ALTER TABLE  AUTO_INCREMENT = 10000000;');
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
