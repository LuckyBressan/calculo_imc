<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDeIMC;

class IMCController extends Controller
{
    public function index() {
        return view('informacoes');
    }
    public function info() {
        $CalculoDeIMC = new CalculoDeIMC();

        $nome = $CalculoDeIMC->nome();
        $idade = $CalculoDeIMC->idade();
        $altura = $CalculoDeIMC->altura();
        $peso = $CalculoDeIMC->peso();
        $imc = $CalculoDeIMC->imc();
        $definicao = $CalculoDeIMC->resultado_imc();

        return view('resultado', ['nome'=>$nome, 'idade'=>$idade, 'altura'=>$altura, 'peso'=>$peso, 'imc'=>$imc, 'definicao'=>$definicao]);
    }
}
