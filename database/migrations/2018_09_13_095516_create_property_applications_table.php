<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('property_case_id')->references('id')->on('property_cases');
            $table->string('sub_registrar');
            $table->string('applicant_name');
            $table->string('applicant_address');
            $table->string('dastavej_details');
            $table->string('dastavej_lakhiapnar');
            $table->string('dastavej_lakhilenar');
            $table->string('property_description');
            $table->text('property_address_office');
            $table->date('dastavej_date');
            $table->date('search_year_from');
            $table->date('search_year_upto');
            $table->string('search_application_no');
            $table->string('search_fee');
            $table->string('actual_payment');
            $table->string('extra_expense');
            $table->string('payment_details');
            $table->string('note');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_applications');
    }
}
