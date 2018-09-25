<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inward_no');
            $table->date('inwarddate');
            $table->string('property_owner_name');
            $table->string('borrower_name');
            $table->string('bank_id');
            $table->string('bank_manager_name');
            $table->string('bank_branch');
            $table->string('bank_department');
            $table->string('bank_facilities')->nullable();
            $table->text('property_description');
            $table->integer('state');
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
        Schema::dropIfExists('property_cases');
    }
}
