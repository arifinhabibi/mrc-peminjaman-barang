<?php

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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('borrower');
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('goods');
            $table->string('type')->nullable();
            $table->integer('amount');
            $table->string('necessity');
            $table->string('duration');
            $table->string('date_loan');
            $table->string('return_goods')->default('belum');
            $table->string('date_return')->nullable();
            $table->string('receiver')->nullable();


            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
};
