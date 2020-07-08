<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bonus_id')->constrained('bonuses');
            $table->foreignId('teaching_item_id')->constrained('teaching_items');
            $table->foreignId('student_id')->constrained('students');
            $table->integer('points');
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
        Schema::dropIfExists('bonus_histories');
    }
}
