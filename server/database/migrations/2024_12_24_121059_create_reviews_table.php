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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text("text");
            $table->unsignedBigInteger("reviewed_by");
            $table->unsignedBigInteger("rent_out_id");
            $table->tinyInteger("status");
            $table->timestamps();

            $table->foreign("reviewed_by")->references('id')->on('users');
            $table->foreign("rent_out_id")->references('id')->on('rent_outs');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
