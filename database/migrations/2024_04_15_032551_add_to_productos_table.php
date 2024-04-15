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
        Schema::table('productos', function (Blueprint $table) {
            $table->string('codigo',20)->unique()->change(); //modificando un campo, el change indica que es modificacion y no creacion
            $table->text('descripcion')->nullable()->change();

            $table->after('existencias', function($table){
                $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            }); // creando un nuevo campo para hacer la foreign key con productos

            //$table->foreign('categoria_id')->references('id')->on('categorias');  //otra forma, más simple pero sin tanto detalle
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            //eliminando la llave foranea primero
            $table->dropForeign('productos_categorias_id_foreign');
            $table->dropColumn('categoria_id');
            $table->dropUnique('productos_codigo_unique');

        });
    }
};
