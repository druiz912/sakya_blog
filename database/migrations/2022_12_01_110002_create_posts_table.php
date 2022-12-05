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
        Schema::create('posts', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->comment('Tabla publicaciones');

            $table->id();
            // Foreigns keys según convención de Laravel 9 
            $table->foreignId('user_id')->constrained();
            // constrained() utiliza convenciones para determinar el nombre de la tabla y la columna a los que se hace referencia, sino se puede nombrar añadiendo el nombre como parámetro
            $table->foreignId('category_id')->constrained();
           
            $table->string('title');
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->boolean('published')->default(0);
            $table->boolean('featured')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
