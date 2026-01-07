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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('expense_categories')->cascadeOnDelete();

            $table->decimal('amount', 12, 2);
            $table->date('date');
            $table->string('receipt_path')->nullable();   // stored on disk / S3
            $table->text('description')->nullable();
            $table->string('project')->nullable();

            // Approval workflow
            $table->enum('status', ['pending', 'approved', 'rejected', 'reimbursed'])
                ->default('pending');
            $table->foreignId('approved_by')->nullable()->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
