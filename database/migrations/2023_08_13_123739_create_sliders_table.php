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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            //parametreleri yazmasırası önemli default alabilmesi için
            $table->string('image')->nullable()->default('https://fakeimg.pl/1256x400/?text=Slider');
            $table->string('name')->nullable()->default('Slider Name');
            $table->text('content')->nullable();
            $table->string('link')->nullable()->default('#');
            $table->enum('status',['0','1'])->default('0');
            $table->enum('position',['text-left','text-right','text-center'])->nullable()->default('text-center');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
