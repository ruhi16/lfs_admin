<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_student_records', function (Blueprint $table) {
            $table->id();
            $table->integer('fee_mandate_id')->nullable();
            $table->integer('fee_collection_id')->nullable();
            $table->integer('myclass_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('studentcr_id')->nullable();

            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('received_amount', 10, 2)->nullable();
            $table->decimal('balance_amount', 10, 2)->nullable();
            $table->string('payment_method')->nullable();

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
        Schema::dropIfExists('fee_student_records');
    }
}
