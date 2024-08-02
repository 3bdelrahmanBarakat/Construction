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
        Schema::create('section_details', function (Blueprint $table) {
            $table->id();
            $table->text('content_title_ar')->nullable();
            $table->text('content_title_en')->nullable();
            $table->text('content_description_ar')->nullable();
            $table->text('content_description_en')->nullable();
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_details');
    }
};
