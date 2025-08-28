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
        Schema::create('english_concepts', function (Blueprint $table) {
            $table->id();
            $table->text('concept_text');
            $table->string('concept_type')->default('word'); // word, phrase, sentence, idiom
            $table->string('part_of_speech')->default('noun'); // noun, verb, adjective, adverb, etc.
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('english_concepts');
    }
};
