<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->enum('type', ['Syndicate', 'Government', 'NGO', 'Health Insurance', 'Health Providers', 'Religious', 'Other'])->default('Other');
            $table->enum('relation', ['Vendor', 'Supplier', 'Client', 'Partner', 'Contact'])->default('Contact');
            $table->string('website')->nullable;
            $table->string('email')->nullable;
            $table->text('description')->nullable();
            $table->text('notes')->nullable();

            $table->unsignedBigInteger('key_contact')->nullable;
            $table->unsignedBigInteger('created_by')->nullable;
            $table->unsignedBigInteger('updated_by')->nullable;
            $table->foreign('key_contact')->references('id')->on('individuals');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
