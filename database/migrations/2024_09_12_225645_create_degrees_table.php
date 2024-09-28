<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_title')->nullable();
            $table->string('type');
            $table->string('abbreviation');
            $table->text('description')->nullable();
            $table->string('grade')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('is_current_degree')->default(false);
            $table->boolean('show_on_cv')->default(true);
            $table->integer('sort_order')->default(0);
            $table->string('university');
            $table->boolean('is_remote_university')->default(false);
            $table->string('my_location')->nullable();
            $table->string('education_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degrees');
    }
};
