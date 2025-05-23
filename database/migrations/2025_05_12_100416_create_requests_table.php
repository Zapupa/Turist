<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('costs');
            $table->foreignId('tour_id')
                ->constrained()
                ->nullOnUpdate()
                ->cascadeOnDelete()
                ->nullable();
            $table->foreignId('user_id')
                ->constrained()
                ->nullOnUpdate()
                ->cascadeOnDelete()
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
