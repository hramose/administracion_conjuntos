<?php

namespace Administracion_conjunto;

use Illuminate\Database\Eloquent\Model;

class EstadoCuentaModel extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name','perfil_usuario',
  ];

}
