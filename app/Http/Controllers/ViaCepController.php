<?php

namespace App\Http\Controllers;

use App\Services\ViaCepService;
use Illuminate\Http\Request;

class ViaCepController extends Controller
{
    protected $viaCepService;

    public function __construct(ViaCepService $viaCepService)
    {
        $this->viaCepService = $viaCepService;
    }

    public function index(Request $request)
    {
        $ceps = $request->input('ceps');
        $cepData = [];

        if ($ceps) {
            $cepsArray = explode(',', $ceps);

            foreach ($cepsArray as $cep) {
                $cep = trim($cep);
                if ($this->validateCepFormat($cep)) {
                    $data = $this->viaCepService->getCepData($cep);
                    if (!isset($data['erro'])) {
                        $cepData[$cep] = $data;
                    }
                }
            }
        }

        return view('consult-cep', ['cepData' => $cepData]);
    }

    protected function validateCepFormat($cep)
    {
        return preg_match('/^\d{5}-?\d{3}$/', $cep);
    }
}
