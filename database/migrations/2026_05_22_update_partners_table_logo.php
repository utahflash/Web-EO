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
        Schema::table('partners', function (Blueprint $table) {
            // Rename column from logo_url to logo_path
            $table->renameColumn('logo_url', 'logo_path');
            // Change to nullable to allow partners without logo
            $table->string('logo_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->renameColumn('logo_path', 'logo_url');
            $table->string('logo_url')->change();
        });
    }
};
