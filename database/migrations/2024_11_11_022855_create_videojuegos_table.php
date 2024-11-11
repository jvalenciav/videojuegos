<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreV');
            $table->decimal('precio', 8, 2);
            $table->boolean('disponibilidad');
            $table->decimal('peso', 5, 2);
            $table->string('foto')->nullable(); // Campo para la foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
}
