<?php

use App\Models\Region;
use App\Models\Restaurant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('restaurant_region', function (Blueprint $table) {
            $table->foreignIdFor(Restaurant::class);
            $table->foreignIdFor(Region::class);
            $table->string('delivery_status');
            $table->decimal('delivery_costs', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurant_region');
    }
};
