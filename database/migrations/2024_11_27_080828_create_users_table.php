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
        Schema::create('duelist', function (Blueprint $table) {
            $table->string('agent');
            $table->string('map');
            $table->integer('kill');
            $table->integer('death');
            $table->integer('assist');
            $table->string('win');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duelist');
    }
};
