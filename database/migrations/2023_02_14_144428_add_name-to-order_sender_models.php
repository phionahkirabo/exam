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
        {
    
            Schema::table('order_senders', function (Blueprint $table) {
                $table->string(column:'names_of_sender')->before(column:'name');
                $table->string(column:'location_address')->after(column:'name');
            
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
