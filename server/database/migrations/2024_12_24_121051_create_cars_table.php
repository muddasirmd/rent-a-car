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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string("name");
            $table->text("image")->nullable();
            $table->integer("doors");
            $table->integer("seats");
            $table->string("speed");
            $table->string("mode")->comments("Auto or Manual");
            $table->string("short_description")->nullable();
            $table->string("long_description")->nullable();
            $table->integer("rent")->comments("Per Day");
            $table->integer("model_year")->nullable();
            $table->unsignedBigInteger("brand_id");
            $table->unsignedBigInteger("owner_id");
            $table->tinyInteger("status")->default(1);
            $table->timestamps();

            $table->foreign("brand_id")->references('id')->on('brands');
            $table->foreign("owner_id")->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
