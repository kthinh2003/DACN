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
        Schema::table('table_product', function (Blueprint $table) {
            // Add id_author column
            $table->unsignedBigInteger('id_author')->nullable()->after('author');
            
            // Add foreign key constraint
            $table->foreign('id_author')
                  ->references('id')
                  ->on('table_authors')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_product', function (Blueprint $table) {
            // Drop foreign key
            $table->dropForeign(['id_author']);
            
            // Drop column
            $table->dropColumn('id_author');
        });
    }
};

