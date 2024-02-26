<?php

use App\Models\Flight;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();

            $table->string('name', 5);

            $table->timestamp('departure');
            $table->timestamp('arrival');

            $table->string('from', 3);
            $table->string('to', 3);

            $table->uuid();

            $table->timestamps();
        });

        Flight::forceCreate([
            'name' => 'AL123',
            'departure' => '2024-01-01 01:00:00',
            'arrival' => '2024-01-01 02:00:00',
            'from' => 'JFK',
            'to' => 'LAX',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
