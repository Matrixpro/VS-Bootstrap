<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('featured_image_url', 2000)->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('marketing_status');
            $table->text('description')->nullable();
            $table->integer('price_min')->nullable();
            $table->integer('price_max')->nullable();
            $table->integer('sqft_min')->nullable();
            $table->integer('sqft_max')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
};
