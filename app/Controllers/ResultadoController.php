<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Resultado;

class ResultadoController extends BaseController{

  private function vCheck($data = ''){
    return ($data == NULL) ? 'N' : 'S';
  }

  private function isNUll($data = ''){
    return ($data == '') ? NULL : $data;
  }


  public function confirmar(){
    return view('confirmacion');
  }

  public function registrar(){
    $resultado = new Resultado();

    $registro = [
      'ruc'             => $this->request->getPost('ruc'),
      'razonsocial'     => $this->request->getPost('razonsocial'),
      'nombrecomercial' => $this->request->getPost('nombrecomercial'),

      'arequipa'        => $this->vCheck($this->request->getPost('arequipa')),
      'ica'             => $this->vCheck($this->request->getPost('ica')),
      'junin'           => $this->vCheck($this->request->getPost('junin')),
      'lalibertad'      => $this->vCheck($this->request->getPost('lalibertad')),
      'lambayeque'      => $this->vCheck($this->request->getPost('lambayeque')),
      'piura'           => $this->vCheck($this->request->getPost('piura')),
      'sanmartin'       => $this->vCheck($this->request->getPost('sanmartin')),
      'tumbes'          => $this->vCheck($this->request->getPost('tumbes')),
      'otrazona'        => $this->isNUll($this->request->getPost('otrazona')),

      'arandano'        => $this->vCheck($this->request->getPost('arandano')),
      'palta'           => $this->vCheck($this->request->getPost('palta')),
      'esparrago'       => $this->vCheck($this->request->getPost('esparrago')),
      'uva'             => $this->vCheck($this->request->getPost('uva')),
      'mango'           => $this->vCheck($this->request->getPost('mango')),
      'otrocultivo'     => $this->isNUll($this->request->getPost('otrocultivo')),

      's2_reg_dsp'   => $this->request->getPost('s2_reg_dsp'),
      's2_reg_num'   => $this->request->getPost('s2_reg_num'),
      's2_osr_dsp'   => $this->request->getPost('s2_osr_dsp'),
      's2_osr_num'   => $this->request->getPost('s2_osr_num'),
      's2_efi_dsp'   => $this->request->getPost('s2_efi_dsp'),
      's2_efi_num'   => $this->request->getPost('s2_efi_num'),
      's2_afi_dsp'   => $this->request->getPost('s2_afi_dsp'),
      's2_afi_num'   => $this->request->getPost('s2_afi_num'),
      's2_lco_dsp'   => $this->request->getPost('s2_lco_dsp'),
      's2_lco_num'   => $this->request->getPost('s2_lco_num'),
      's2_ooc_des'   => $this->isNUll($this->request->getPost('s2_ooc_des')),
      's2_ooc_dsp'   => $this->request->getPost('s2_ooc_dsp'),
      's2_ooc_num'   => $this->request->getPost('s2_ooc_num'),
      's2_oma_dsp'   => $this->request->getPost('s2_oma_dsp'),
      's2_oma_num'   => $this->request->getPost('s2_oma_num'),
      's2_ins_dsp'   => $this->request->getPost('s2_ins_dsp'),
      's2_ins_num'   => $this->request->getPost('s2_ins_num'),
      's2_otc_des'   => $this->isNUll($this->request->getPost('s2_otc_des')),
      's2_otc_dsp'   => $this->request->getPost('s2_otc_dsp'),
      's2_otc_num'   => $this->request->getPost('s2_otc_num'),

      's3_omo_dsp'   => $this->request->getPost('s3_omo_dsp'),
      's3_omo_num'   => $this->request->getPost('s3_omo_num'),
      's3_osr_dsp'   => $this->request->getPost('s3_osr_dsp'),
      's3_osr_num'   => $this->request->getPost('s3_osr_num'),
      's3_ooc_des'   => $this->isNUll($this->request->getPost('s3_ooc_des')),
      's3_ooc_dsp'   => $this->request->getPost('s3_ooc_dsp'),
      's3_ooc_num'   => $this->request->getPost('s3_ooc_num'),
      's3_fri_dsp'   => $this->request->getPost('s3_fri_dsp'),
      's3_fri_num'   => $this->request->getPost('s3_fri_num'),
      's3_cal_dsp'   => $this->request->getPost('s3_cal_dsp'),
      's3_cal_num'   => $this->request->getPost('s3_cal_num'),
      's3_aux_dsp'   => $this->request->getPost('s3_aux_dsp'),
      's3_aux_num'   => $this->request->getPost('s3_aux_num'),
      's3_ica_dsp'   => $this->request->getPost('s3_ica_dsp'),
      's3_ica_num'   => $this->request->getPost('s3_ica_num'),
      's3_otc_des'   => $this->isNUll($this->request->getPost('s3_otc_des')),
      's3_otc_dsp'   => $this->request->getPost('s3_otc_dsp'),
      's3_otc_num'   => $this->request->getPost('s3_otc_num'),

      's4_dig_dsp'   => $this->request->getPost('s4_dig_dsp'),
      's4_dig_num'   => $this->request->getPost('s4_dig_num'),
      's4_oap_dsp'   => $this->request->getPost('s4_oap_dsp'),
      's4_oap_num'   => $this->request->getPost('s4_oap_num'),
      's4_ooc_des'   => $this->isNUll($this->request->getPost('s4_ooc_des')),
      's4_ooc_dsp'   => $this->request->getPost('s4_ooc_dsp'),
      's4_ooc_num'   => $this->request->getPost('s4_ooc_num'),
      's4_aux_dsp'   => $this->request->getPost('s4_aux_dsp'),
      's4_aux_num'   => $this->request->getPost('s4_aux_num'),
      's4_otc_des'   => $this->isNUll($this->request->getPost('s4_otc_des')),
      's4_otc_dsp'   => $this->request->getPost('s4_otc_dsp'),
      's4_otc_num'   => $this->request->getPost('s4_otc_num')
    ];

    //echo "<pre>";
    //var_dump($registro);
    $result = $resultado->insert($registro);
    return redirect()->to(base_url('/encuesta/confirmar'));

  }

}