<?php

namespace Administracion_conjunto;

use Illuminate\Database\Eloquent\Model;

class cuentaMoldel extends Model
{
  Schema:: create('EstadoCuentaModel',function (Blueprint $table)
  {
    $table->increments('id');
    $table->integer('perfil_usuario');
    $table->string('name');
  })
}
