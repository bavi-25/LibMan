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
        //
        Schema::create('library_release_letters', function (Blueprint $table) {
            $table->id();
            $table->string('letter_code')->unique();
            $table->string('document_return');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('remark')->nullable();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('library_release_letters');
    }
};
