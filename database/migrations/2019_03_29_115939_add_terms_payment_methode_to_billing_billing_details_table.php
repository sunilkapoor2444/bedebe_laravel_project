<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTermsPaymentMethodeToBillingBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billing_details', function (Blueprint $table) {
           $table->string('payment_method')->after('type');
           $table->string('terms_conditions')->after('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('billing_details', function (Blueprint $table) {
            //
        });
    }
}
