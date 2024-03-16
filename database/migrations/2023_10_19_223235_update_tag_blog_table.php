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
        if(!(Schema::hasColumn('tags','blog_id'))){
            Schema::table('tags', function(Blueprint $table){
                // $table->enum('met',['active','inactive'])->default('active');
                $table->unsignedBigInteger('blog_id')->nullable();
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
