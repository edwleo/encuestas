<?php

namespace App\Models;
use CodeIgniter\Model;

class Resultado extends Model{

  protected $table = 'resultados';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'ruc', 'razonsocial', 'nombrecomercial',
    'arequipa', 'ica', 'junin', 'lalibertad', 'lambayeque', 'piura', 'sanmartin', 'tumbes', 'otrazona',
    'arandano', 'palta', 'esparrago', 'uva', 'mango', 'otrocultivo',
    's2_reg_dsp','s2_reg_num','s2_osr_dsp','s2_osr_num','s2_efi_dsp','s2_efi_num','s2_afi_dsp','s2_afi_num','s2_lco_dsp','s2_lco_num','s2_ooc_des','s2_ooc_dsp','s2_ooc_num','s2_oma_dsp','s2_oma_num','s2_ins_dsp','s2_ins_num','s2_otc_des','s2_otc_dsp','s2_otc_num',
    's3_omo_dsp','s3_omo_num','s3_osr_dsp','s3_osr_num','s3_ooc_des','s3_ooc_dsp','s3_ooc_num','s3_fri_dsp','s3_fri_num','s3_cal_dsp','s3_cal_num','s3_aux_dsp','s3_aux_num','s3_ica_dsp','s3_ica_num','s3_otc_des','s3_otc_dsp','s3_otc_num',
    's4_dig_dsp','s4_dig_num','s4_oap_dsp','s4_oap_num','s4_ooc_des','s4_ooc_dsp','s4_ooc_num','s4_aux_dsp','s4_aux_num','s4_otc_des','s4_otc_dsp','s4_otc_num'
  ];

}