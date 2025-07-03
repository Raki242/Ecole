<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('preinscriptions', function (Blueprint $table) {
            $table->boolean('valide')->default(false)->after('option');
        });
    }

    public function down(): void
    {
        Schema::table('preinscriptions', function (Blueprint $table) {
            $table->dropColumn('valide');
        });
    }
};

