<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('header')->nullable();
            $table->text('footer')->nullable();
            $table->text('script')->nullable();
            $table->text('gioi_thieu_page')->nullable();
            $table->string('logo')->nullable();
            $table->string('seo_banner')->nullable();
            $table->string('favicon')->nullable();
            $table->string('website_name')->nullable();
            $table->string('homepage_title')->nullable();
            $table->text('homepage_description')->nullable();
            $table->string('email')->nullable();
            $table->string('hotline')->nullable();
            $table->string('fax')->nullable();
            $table->text('address')->nullable();
            $table->text('map_iframe')->nullable();
            $table->string('fanpage')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}; 