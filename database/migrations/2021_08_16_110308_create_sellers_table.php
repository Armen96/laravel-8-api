<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->string('seller_first_name')->nullable();
            $table->string('seller_last_name')->nullable();
            $table->string('seller_full_name')->nullable();
            $table->string('seller_middle_name')->nullable();
            $table->string('seller_mailing_address')->nullable();
            $table->string('seller_mailing_city')->nullable();
            $table->string('seller_mailing_state')->nullable();
            $table->string('seller_mailing_zip')->nullable();
            $table->string('seller_company_owned')->nullable();
            $table->integer('total_subjects')->default(0);
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
        Schema::dropIfExists('seller');
    }
}
