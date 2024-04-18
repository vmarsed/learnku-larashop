<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCrowdfundingProductsCloumnStatusDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crowdfunding_products',function (Blueprint $table){
            $table->string('status')->default(\App\Models\CrowdfundingProduct::STATUS_FUNDING)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crowdfunding_products',function (Blueprint $table){
            $table->string('status')->default('')->change();
        });
    }
}
