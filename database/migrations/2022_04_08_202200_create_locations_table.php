<?php

use App\Models\Community;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('zip', 10)->nullable();
            $table->foreignIdFor(State::class)->nullable()->constrained();
            $table->foreignIdFor(Country::class)->nullable()->constrained();
            $table->foreignIdFor(Community::class)->nullable()->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
