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
        if(!(Schema::hasColumn('org_queries','signup_token'))){
            Schema::table('org_queries', function(Blueprint $table){
                $table->longText('signup_token')->nullable();
            });

            
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
