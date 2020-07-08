<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teaching_section_id')->constrained('teaching_sections');
            $table->foreignId('content_id')->constrained('contents')->nullable();
            $table->string('url_liveclass');
            $table->string('url_liveclass_recorded')->nullable();
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
        Schema::dropIfExists('teaching_items');
    }
}
