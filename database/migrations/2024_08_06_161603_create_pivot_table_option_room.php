<?php

use App\Models\Option;
use App\Models\Room;
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
        Schema::create('option_room', function (Blueprint $table) {
            $table->foreignIdFor(Room::class)->constrained()->onDelete()->cascadeOnDelete();
            $table->foreignIdFor(Option::class)->constrained()->onDelete()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_option_room');
    }
};
