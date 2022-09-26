<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    public function nome() {
        return $_GET['nome'];
    }
    public function idade() {
        $idade = 0;

        $data_nascimento = explode("-",$_GET['nascimento']);

        $diaNascimento = $data_nascimento[2];
        $mesNascimento = $data_nascimento[1];
        $anoNascimento = $data_nascimento[0];

        $diaAtual = date("d");
        $mesAtual = date("m");
        $anoAtual = date("Y");

        $idade = $anoAtual - $anoNascimento;

        if($mesAtual<$mesNascimento) {
            $idade -=1;
        } else if($mesAtual==$mesNascimento && $diaAtual<$diaNascimento) {
            $idade -=1;
        }
        

        return $idade;
    }
    public function altura() {
        return $_GET['altura'];
    }
    public function peso() {
        return $_GET['peso'];
    }
    public function imc() {
        $altura = $_GET['altura'];
        $peso =  $_GET['peso'];
        
        $imc = $peso/($altura*$altura);

        return $imc;
    }
    public function resultado_imc() {
        $altura = $_GET['altura'];
        $peso =  $_GET['peso'];
        
        $imc = $peso/($altura*$altura);

        if($imc<18.5) {
            $definicao = "ABAIXO DO PESO";
            return $definicao;
        } else if($imc<24.9) {
            $definicao = "PESO NORMAL";
            return $definicao;
        } else if($imc<29.9) {
            $definicao = "SOBREPESO";
            return $definicao;
        } else if($imc<34.9) {
            $definicao = "OBDESIDADE GRAU I";
            return $definicao;
        } else if($imc<39.9) {
            $definicao = "OBDESIDADE GRAU II";
            return $definicao;
        } else {
            $definicao = "OBDESIDADE GRAU III";
            return $definicao;
        }
    }
}
