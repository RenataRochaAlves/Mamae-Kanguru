<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'eventos';

    /**
     * Run the migrations.
     * @table eventos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nome', 45);
            $table->dateTime('data');
            $table->text('descricao_1')->nullable()->default(null);
            $table->text('descricao_2')->nullable()->default(null);
            $table->text('descricao_3')->nullable()->default(null);
            $table->string('foto', 55)->nullable()->default(null);
            $table->timestamps();


            $table->foreignId('condominio_id')
                ->references('id')->on('condominio')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
