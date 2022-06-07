<?php

use App\Models\Venue;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Venue::class)->constrained()->restrictOnDelete();
            $table->string('name');
            $table->string('image');
            $table->enum('category', ['Concerts', 'Plays', 'Exhibitions', 'Festivals', 'Movies', 'Culinary', 'Conferences', 'Sports events', 'Other']);
            $table->dateTime('time');
            $table->longText('description');
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
        Schema::dropIfExists('events');
    }
};
