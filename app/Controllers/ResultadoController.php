<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Resultado;

class ResultadoController extends BaseController{

  public function registrar(){
    $resultado = new Resultado();

    $registro = [
      'ruc'             => $this->request->getVar(''),
      'razonsocial'     => $this->request->getVar(''),
      'nombrecomercial' => $this->request->getVar(''),

      'arequipa'        => $this->request->getVar(''),
      'ica'             => $this->request->getVar(''),
      'junin'           => $this->request->getVar(''),
      'lalibertad'      => $this->request->getVar(''),
      'lambayeque'      => $this->request->getVar(''),
      'piura'           => $this->request->getVar(''),
      'sanmartin'       => $this->request->getVar(''),
      'tumbes'          => $this->request->getVar(''),
      'otrazona'        => $this->request->getVar(''),

      'arandano'        => $this->request->getVar(''),
      'palta'           => $this->request->getVar(''),
      'esparrago'       => $this->request->getVar(''),
      'uva'             => $this->request->getVar(''),
      'mango'           => $this->request->getVar(''),
      'otrocultivo'     => $this->request->getVar(''),
      
      's2_reg_dsp'   => $this->request->getVar(''),
      's2_reg_num'   => $this->request->getVar(''),
      's2_osr_dsp'   => $this->request->getVar(''),
      's2_osr_num'   => $this->request->getVar(''),
      's2_efi_dsp'   => $this->request->getVar(''),
      's2_efi_num'   => $this->request->getVar(''),
      's2_afi_dsp'   => $this->request->getVar(''),
      's2_afi_num'   => $this->request->getVar(''),
      's2_lco_dsp'   => $this->request->getVar(''),
      's2_lco_num'   => $this->request->getVar(''),
      's2_ooc_des'   => $this->request->getVar(''),
      's2_ooc_dsp'   => $this->request->getVar(''),
      's2_ooc_num'   => $this->request->getVar(''),
      's2_oma_dsp'   => $this->request->getVar(''),
      's2_oma_num'   => $this->request->getVar(''),
      's2_ins_dsp'   => $this->request->getVar(''),
      's2_ins_num'   => $this->request->getVar(''),
      's2_otc_des'   => $this->request->getVar(''),
      's2_otc_dsp'   => $this->request->getVar(''),
      's2_otc_num'   => $this->request->getVar(''),

      's3_omo_dsp'   => $this->request->getVar(''),
      's3_omo_num'   => $this->request->getVar(''),
      's3_osr_dsp'   => $this->request->getVar(''),
      's3_osr_num'   => $this->request->getVar(''),
      's3_ooc_des'   => $this->request->getVar(''),
      's3_ooc_dsp'   => $this->request->getVar(''),
      's3_ooc_num'   => $this->request->getVar(''),
      's3_fri_dsp'   => $this->request->getVar(''),
      's3_fri_num'   => $this->request->getVar(''),
      's3_cal_dsp'   => $this->request->getVar(''),
      's3_cal_num'   => $this->request->getVar(''),
      's3_aux_dsp'   => $this->request->getVar(''),
      's3_aux_num'   => $this->request->getVar(''),
      's3_ica_dsp'   => $this->request->getVar(''),
      's3_ica_num'   => $this->request->getVar(''),
      's3_otc_des'   => $this->request->getVar(''),
      's3_otc_dsp'   => $this->request->getVar(''),
      's3_otc_num'   => $this->request->getVar(''),
      
      's4_dig_dsp'   => $this->request->getVar(''),
      's4_dig_num'   => $this->request->getVar(''),
      's4_oap_dsp'   => $this->request->getVar(''),
      's4_oap_num'   => $this->request->getVar(''),
      's4_ooc_des'   => $this->request->getVar(''),
      's4_ooc_dsp'   => $this->request->getVar(''),
      's4_ooc_num'   => $this->request->getVar(''),
      's4_aux_dsp'   => $this->request->getVar(''),
      's4_aux_num'   => $this->request->getVar(''),
      's4_otc_des'   => $this->request->getVar(''),
      's4_otc_dsp'   => $this->request->getVar(''),
      's4_otc_num'   => $this->request->getVar('')
    ];

    $resultado->insert($registro);

  }

}