<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Office;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Office::class);
            $table->string('client_type_category');
            $table->longText('client_type_category_another')->nullable();
            $table->string('sex');
            $table->integer('age');
            $table->string('gender');
            $table->longText('region_of_residence');
            $table->longText('cc1');
            $table->longText('cc2');
            $table->longText('cc3');
            $table->longText('sqd0');
            $table->longText('sqd1');
            $table->longText('sqd2');
            $table->longText('sqd3');
            $table->longText('sqd4');
            $table->longText('sqd5');
            $table->longText('sqd6');
            $table->longText('sqd7');
            $table->longText('sqd8');
            $table->longText('suggestions')->nullable();
            $table->longText('service_unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
