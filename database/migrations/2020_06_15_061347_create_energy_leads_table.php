<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergyLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('comment')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('home_type')->nullable();
            $table->string('manager_type')->nullable();
            $table->string('energy_type')->nullable();
            $table->string('resident_number')->nullable();
            $table->string('isolate')->nullable();
            $table->string('want_work')->nullable();
            $table->string('energy_bill')->nullable();
            $table->string('more_info')->nullable();
            $table->string('area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('energy_leads');
    }
}
