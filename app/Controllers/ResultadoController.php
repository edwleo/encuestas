<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Resultado;

class ResultadoController extends BaseController{

  public function registrar(){
    $resultado = new Resultado();

    $registro = [];

    $resultado->insert($registro);

  }

}