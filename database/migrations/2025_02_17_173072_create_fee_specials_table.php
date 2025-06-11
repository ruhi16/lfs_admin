<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeSpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_specials', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description')->nullable();

            $table->integer('myclass_id')->nullable();
            $table->integer('fee_structure_id')->nullable();

            $table->integer('fee_category_id')->nullable();
            $table->integer('fee_particular_id')->nullable();
            $table->decimal('amount')->nullable();
            $table->boolean('is_paid')->default(0)->nullable();

            $table->integer('school_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('approved_by')->nullable();
            $table->boolean('is_active')->default(1)->nullable();
            $table->boolean('is_finalized')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('fee_specials');
    }
}
