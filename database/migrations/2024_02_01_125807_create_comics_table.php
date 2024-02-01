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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('thumb');
            $table->text('description')->nullable();
            $table->date('publication_year')->nullable();
            $table->string('writers');
            $table->string('artists')->nullable();
            $table->string('publisher', 30)->nullable();
            $table->string('type', 30)->nullable();
            $table->string('series')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
