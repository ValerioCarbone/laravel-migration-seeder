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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 20);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->time('departure_date_time');
            $table->time('arrival_date_time');
            $table->unsignedSmallInteger('train_id');
            $table->unsignedTinyInteger('number_of_carriages');
            $table->boolean('on_time')->default(1);
            $table->unsignedSmallInteger('delay')->nullable();
            $table->boolean('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
