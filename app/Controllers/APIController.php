<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use CodeIgniter\HTTP\Exceptions\HTTPException;
use Exception;

class APIController extends BaseController{

  public function getCompanyData(string $ruc = ''){
    $this->response->setContentType('application/json');

    $baseURI = 'https://api.decolecta.com';
    $client = Services::curlrequest(['baseURI' => $baseURI]);
    $token = 'sk_5727.OE8Wlt1ZvzVXhkFMWCRYC8p4wfoxemsx';
    
    $headers = [
      'Content-Type'  => 'application/json',
      'Authorization' => 'Bearer ' . $token
    ];
    
    $endPoint = '/v1/sunat/ruc?numero=' . $ruc;

    try{
      $response = $client->get(
        $endPoint,
        [
          'headers'     => $headers,
          'http_errors' => false //Para que funcione el código 422 sino se va a Excepción
        ]
      );

      if ($response->getStatusCode() == 422){
        return $this->response->setJSON(['success'=> false, 'message' => 'RUC no válido']);
      }

      if ($response->getStatusCode() == 200){
        $body = $response->getBody();
        $data = json_decode($body, true);
        return $this->response->setJSON(
          ['success' => true, 'data' => $data]
        );
      }
    }
    catch(HTTPException $e){
      return $this->response->setJSON(
        ['success' => false, 'message' => 'Problema acceso al servicio']
      );
    }
    catch(Exception $e){
      return $this->response->setJSON(
        ['success' => false, 'message' => 'Imposible acceder al recurso']
      );
    }

  }

}