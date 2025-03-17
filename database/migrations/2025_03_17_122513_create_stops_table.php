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
        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->json('coordinate');
            $table->string('name');
            $table->string('arrivalTime');
            $table->unsignedBigInteger('bus_navigation_id');
            $table->timestamps();

            $table->foreign('bus_navigation_id')
                ->references('id')
                ->on('bus_navigations')
                ->onDelete('cascade');
        });


        
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stops');
    }
};
