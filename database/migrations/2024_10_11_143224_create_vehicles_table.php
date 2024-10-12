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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('vmodel');
            $table->year('year');
            $table->string('vin')->unique();
            $table->string('chasis_number')->unique();
            $table->string('engine_number')->unique();
            $table->string('license_plate_number')->unique();
            $table->string('color');
            $table->string('engine_type');
            $table->integer('mileage');
            $table->text('features')->nullable();
            $table->decimal('price', 10, 2);
            $table->date('registration_date');
            $table->string('number_of_last_own');
            $table->string('owner_name');
            $table->string('last_owner_address');
            $table->text('insurance_details');
            $table->text('last_service_records');
            $table->date('purchase_date');
            $table->decimal('purchase_price', 10, 2);
            $table->string('location');
            $table->text('notes')->nullable();
            $table->enum('status', ['Registered', 'Unregistered']);
            $table->enum('availability', ['In Stock', 'Out Stock']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
