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
        Schema::create('match_games', function (Blueprint $table) {
            $table->id();

            $table->string('home_team');
            $table->string('away_team');

            $table->integer('home_score')->nullable();
            $table->integer('away_score')->nullable();

            $table->date('match_date');
            $table->string('location')->nullable();
            $table->string('competition')->nullable();
            $table->string('season')->nullable();
            $table->enum('status', ['scheduled', 'finished', 'canceled'])->default('scheduled');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_games');
    }
};
