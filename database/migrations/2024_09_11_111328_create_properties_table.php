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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('property_type', ['sale', 'rent'])->notNullable();
            $table->enum('property_category', [
                'house', 'land', 'apartment', 'office', 'villa', 'commercial',
                'industrial', 'agricultural', 'spiritual', 'service', 'other'
            ])->notNullable();
            $table->string('city', 100)->notNullable();
            $table->string('district', 100)->notNullable();
            $table->string('commune', 100)->notNullable();
            $table->string('detailAddress', 100)->nullable();
            $table->string('project')->nullable();
            $table->string('title', 255)->notNullable();
            $table->text('description')->notNullable();
            $table->decimal('area', 10, 2)->notNullable();
            $table->integer('price')->notNullable();
            $table->enum('price_unit', ['vnd', 'price_per_m2', 'negotiable'])->default('vnd');
            $table->enum('legal_documents', ['none', 'red_book', 'sale_contract', 'pending'])->default('none');
            $table->integer('num_of_bedrooms')->notNullable();
            $table->integer('num_of_bathrooms')->notNullable();
            $table->integer('num_of_floors')->notNullable();
            $table->enum('house_direction', [
                'east', 'west', 'south', 'north', 'northeast', 'northwest', 'southeast', 'southwest'
            ])->nullable();
            $table->enum('balcony_direction', [
                'east', 'west', 'south', 'north', 'northeast', 'northwest', 'southeast', 'southwest'
            ])->nullable();
            $table->string('furniture', 255)->nullable();
            $table->string('video_link', 255)->nullable();
            $table->string('name', 100)->notNullable();
            $table->string('email', 100)->notNullable();
            $table->string('phone', 20)->notNullable();
            $table->enum('package', ['standard', 'vip1', 'vip2', 'vip3'])->default('standard');
            $table->integer('post_days')->default(10)->notNullable();
            $table->date('start_date')->nullable();
            $table->enum('post_status', ['pending_approval', 'pending_revision', 'rejected', 'active'])->default('pending_approval');
            $table->integer('view')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
