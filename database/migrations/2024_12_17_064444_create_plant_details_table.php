<?php

use App\Models\Plant;
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
        Schema::create('plant_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Plant::class)->unique()->constrained()->cascadeOnDelete(); // plant_id
            $table->string('color');
            $table->longText('characteristics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_details');
    }
};
