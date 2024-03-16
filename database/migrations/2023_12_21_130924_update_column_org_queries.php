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
        if(!(Schema::hasColumn('org_queries','employees'))){
            Schema::table('org_queries', function(Blueprint $table){
                $table->bigInteger('employees')->nullable();
            });

            // CentralUser::where('id','!=',null)->where('password','!=',null)->update(['status' => CentralUser::STATUS_ACTIVE]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
