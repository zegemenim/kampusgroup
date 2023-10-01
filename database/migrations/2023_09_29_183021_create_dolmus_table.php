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
        Schema::create('dolmus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment("Durak Adı");
            $table->string('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('bedel')->nullable();
            $table->string('image')->nullable();
            $table->integer('vehicle')->nullable();
            $table->integer('status')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
