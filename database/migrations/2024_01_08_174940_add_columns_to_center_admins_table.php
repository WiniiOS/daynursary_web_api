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
      
        Schema::table('center_admins', function (Blueprint $table) {
            $table->string('ghl_user_id')->nullable();
            $table->string('location_id')->nullable();     
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('center_admins', function (Blueprint $table) {
            $table->dropColumn('ghl_user_id');
            $table->dropColumn('location_id');
          
        });
    }
};
