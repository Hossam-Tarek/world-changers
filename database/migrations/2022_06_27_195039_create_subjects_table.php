<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('department_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('name');
            $table->tinyInteger('semester')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}