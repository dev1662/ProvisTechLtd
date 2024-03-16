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
        if(!(Schema::hasColumn('tags','url'))){
            Schema::table('tags', function(Blueprint $table){
                // $table->enum('met',['active','inactive'])->default('active');
                $table->longText('url')->nullable();
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
