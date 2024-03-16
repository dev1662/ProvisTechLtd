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
        if(!(Schema::hasColumn('blogs','tag_id'))){
            Schema::table('blogs', function(Blueprint $table){
                // $table->enum('met',['active','inactive'])->default('active');
                $table->unsignedBigInteger('tag_id')->nullable();
               });
        }
        if(!(Schema::hasTable('tags'))){

            Schema::table('tags', function(Blueprint $table){
                // $table->enum('met',['active','inactive'])->default('active');
                // $table->unsignedBigInteger('tag_id');
                $table->id();
                $table->string('name')->nullable();
                $table->longText('url')->nullable();
                $table->timestamps();
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
