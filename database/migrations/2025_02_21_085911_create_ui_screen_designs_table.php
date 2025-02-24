<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUiScreenDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_screen_designs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();

            $table->integer('ui_screen_id')->unsigned()->nullable();
            $table->integer('ui_section_id')->unsigned()->nullable();
            $table->integer('ui_entity_id')->unsigned()->nullable();
            $table->integer('ui_particular_id')->unsigned()->nullable();
            $table->string('ui_particular_detail')->nullable();

            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('details')->nullable();
            $table->string('img_ref_1')->nullable();
            $table->string('img_ref_2')->nullable();
            $table->string('img_ref_3')->nullable();
            $table->string('by_whom')->nullable();
            $table->string('for_whom_desig')->nullable();

            $table->integer('school_id')->unsigned()->nullable();
            $table->integer('session_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('approved_by')->unsigned()->nullable();
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
        Schema::dropIfExists('ui_screen_designs');
    }
}
