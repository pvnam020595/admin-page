<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('district')) {
            Schema::create('district', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('code');
                $table->string('name');
                $table->string('type');
                $table->string('name_with_type');
                $table->string('path');
                $table->string('path_with_type');
                $table->foreignId('parent_code')
                    ->constrained('province')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->timestamps();
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_unicode_ci';
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
        Schema::dropIfExists('district');
    }
}
