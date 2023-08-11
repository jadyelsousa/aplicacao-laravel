<?php 

namespace App\Services;

class ViaCepService
{
    protected $baseUrl = 'https://viacep.com.br/ws/';

    public function getCepData($cep)
    {
        $url = "{$this->baseUrl}{$cep}/json/";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}