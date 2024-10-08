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
        Schema::create('rete_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("room_id")->references("id")->on("rooms");
            $table->string("name");
            $table->string("slug");
            $table->longText("detail");
            $table->double("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rete_plans');
    }
};
