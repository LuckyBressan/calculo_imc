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
        $idade_sono = $CalculoDeIMC->idade_e_sono();
        $altura = $CalculoDeIMC->altura();
        $peso = $CalculoDeIMC->peso();
        $imc = $CalculoDeIMC->imc();
        $hora_dormida = $CalculoDeIMC->hora_sono();

        return view('resultado', ['nome'=>$nome, 'idade'=>$idade_sono['idade'], 'sono'=>$idade_sono['sono'], 'hora_sono'=>$hora_dormida ,'altura'=>$altura, 'peso'=>$peso, 'imc'=>$imc['imc'], 'definicao'=>$imc['definicao']]);
    }
}
