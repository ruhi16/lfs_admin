<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop05UnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop05_units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique()->nullable();
            $table->text('description')->nullable();

            $table->string('unit_title')->unique()->nullable();
            $table->string('unit_code')->unique()->nullable();            
            $table->double('unit_amount', 10, 3)->unique()->nullable();




            $table->boolean('is_active')->default(false);
            $table->integer('owner_id');
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
        Schema::dropIfExists('shop05_units');
    }
}
