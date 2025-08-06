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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('book_category_id')->constrained('book_categories', 'id')->cascadeOnDelete();
            $table->foreignId('author_id')->constrained('authors', 'id')->cascadeOnDelete();
            $table->decimal('average_rating', 10, 2)->default(0.00);
            $table->integer('voter')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
