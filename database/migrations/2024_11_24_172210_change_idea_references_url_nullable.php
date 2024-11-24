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
        Schema::table('idea_references', function (Blueprint $table) {
            #カラムをnull許可に変更する
            $table->string('url')->nullable()->change();
            $table->string('content')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idea_references', function (Blueprint $table) {
            #カラムをnull許可に変更する
            $table->string('url')->nullable(false)->change();
            $table->string('content')->nullable(false)->change();
        });
    }
};
