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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enq_refno')->nullable();
            $table->string('custom_ref')->nullable();
            $table->string('enq_type')->default('Sales Enquiry');
            $table->text('enq_products')->nullable();
            $table->string('enq_name')->nullable();
            $table->string('merchant_name')->nullable();
            $table->string('emirate')->nullable();
            $table->string('request_type')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('box_type')->nullable();
            $table->string('number_of_box')->nullable();
            $table->string('enq_lname')->nullable();
            $table->string('enq_email')->nullable();
            $table->string('req_email')->nullable();
            $table->string('enq_company')->nullable();
            $table->string('enq_customer')->nullable();
            $table->string('enq_phone')->nullable();
            $table->string('enq_mobile')->nullable();
            $table->string('enq_country')->nullable();
            $table->string('enq_country2')->nullable();
            $table->string('enq_date')->nullable();
            $table->string('enq_city')->nullable();
            $table->string('enq_subject')->nullable();
            $table->text('enq_message')->nullable();
            $table->string('enq_lead')->nullable();
            $table->string('enq_record')->nullable();
            $table->string('is_active')->dafault('Y');
            $table->string('added_on')->nullable();
            $table->string('enq_status')->default('W');
            $table->string('enq_website')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('statement_type')->nullable();
            $table->integer('mailsend')->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
