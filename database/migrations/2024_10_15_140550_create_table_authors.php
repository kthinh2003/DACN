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
        Schema::create('table_authors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('birth_year')->nullable();
            $table->text('bio')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('color')->default('#667eea');
            $table->string('gradient')->default('linear-gradient(135deg, #667eea 0%, #764ba2 100%)');
            $table->string('tag1')->nullable();
            $table->string('tag2')->nullable();
            $table->string('avatar_path')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('table_poems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_author')->constrained('table_authors', 'id')->cascadeOnDelete();
            $table->string('title');
            $table->longText('content');
            $table->integer('year')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_poems');
        Schema::dropIfExists('table_authors');
    }
};
