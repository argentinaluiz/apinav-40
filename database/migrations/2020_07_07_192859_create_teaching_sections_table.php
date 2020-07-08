<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teaching_id')->constrained('teachings');
            $table->foreignId('section_id')->constrained('sections');
            $table->unique(['teaching_id', 'section_id']);
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
        Schema::dropIfExists('teaching_sections');
    }
}
