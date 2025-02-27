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
        Schema::create('mashins', function (Blueprint $table) {
            $table->id(); // Unikal ID
            $table->string('name'); // Maşının adı
            $table->string('model'); // Maşının modeli
            $table->decimal('price', 10, 2); // Qiyməti
            $table->boolean('is_featured')->default(false); // Seçilmiş maşın (isteğe bağlı)
            $table->timestamps(); // Yaradılma və yenilənmə vaxtları
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mashins');
    }
};
