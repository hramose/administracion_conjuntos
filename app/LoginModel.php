<?php

namespace administracion_conjunto;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    $this->get('l/LoginView')
      ->assertStatus(200)
      ->assertSee('Hola Mundo');
}
