<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienvestirLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienvestir_leads', function (Blueprint $table) {
            $table->id();
            $table->string('age')->nullable();
            $table->string('financial')->nullable();
            $table->string('prospect')->nullable();
            $table->string('friend')->nullable();
            $table->string('vacation')->nullable();
            $table->string('risk')->nullable();
            $table->string('game')->nullable();
            $table->string('investment')->nullable();
            $table->string('prefer')->nullable();
            $table->string('diversification')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('comment')->nullable();
            $table->boolean('type')->default(true);
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
        Schema::dropIfExists('bienvestir_leads');
    }
}
