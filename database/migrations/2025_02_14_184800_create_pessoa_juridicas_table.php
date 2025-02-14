<?php

declare(strict_types = 1);

use App\Models\Pessoa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoa_juridicas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pessoa::class);
            $table->string('cnpj')->unique();
            $table->string('razao_social');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_juridicas');
    }
};
