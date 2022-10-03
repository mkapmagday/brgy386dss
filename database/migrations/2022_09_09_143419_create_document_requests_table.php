<?php

use App\Models\DocumentList;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('document_id')->constrained('document_lists');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('pnum');
            $table->string('address')->nullable();
            $table->date('bdate')->nullable();
            $table->string('years')->nullable();
            $table->string('months')->nullable();
            $table->string('municipality')->nullable();
            $table->string('vdate')->nullable();
            $table->string('age')->nullable();
            $table->string('representative')->nullable();
            $table->string('purpose')->nullable();
            $table->string('reason')->nullable();
            $table->string('relation')->nullable();
            $table->enum('status',['pending','approved','for claiming','claimed'])->default('pending');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_requests');
    }
};
