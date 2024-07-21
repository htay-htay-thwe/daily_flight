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
        Schema::create('post_creations', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('from');
            $table->string('to');
            $table->string('name');
            $table->string("fromTime");
            $table->string("toTime");
            $table->string("price");
            $table->string("class");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_creations');
    }
};