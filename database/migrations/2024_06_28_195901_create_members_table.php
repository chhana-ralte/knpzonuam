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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('phone')->nullable();
            $table->string('sspawl')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->text('details')->nullable();
            $table->boolean('deleted')->default(false);
            $table->ForeignIdFor(App\Models\Bial::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
