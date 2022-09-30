<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    public function nome() {
        return $_GET['nome'];
    }
    public function idade_e_sono() {
        $idade = 0;
        $horas = $_GET['hora_dormida'];

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
        
        if($horas<14.5 && $idade<1) {
            $sono = "Ruim";
        } else if($horas>14.5 && $idade<1) {
            $sono = "Boa";
        } else if($horas<11 && $idade<=2) {
            $sono = "Ruim";
        } else if($horas>11 && $idade<=2) {
            $sono = "Boa";
        } else if($horas<10 && $idade<=5) {
            $sono = "Ruim";
        } else if($horas>10 && $idade<=5) {
            $sono = "Boa";
        } else if($horas<9 && $idade<=13) {
            $sono = "Ruim";
        } else if($horas>9 && $idade<=13) {
            $sono = "Boa";
        } else if($horas<8 && $idade<=17) {
            $sono = "Ruim";
        } else if($horas>8 && $idade<=17) {
            $sono = "Boa";
        } else if($horas<7 && $idade<=65) {
            $sono = "Ruim";
        } else if($horas>7 && $idade<=65) {
            $sono = "Boa";
        }

        return ['idade'=>$idade, 'sono'=>$sono];
    }
    public function altura() {
        return $_GET['altura'];
    }
    public function peso() {
        return $_GET['peso'];
    }
    public function hora_sono() {
        return $_GET['hora_dormida'];
    }
    public function imc() {
        $altura = $_GET['altura'];
        $peso =  $_GET['peso'];
        
        $imc = $peso/($altura*$altura);

        if($imc<18.5) {
            $definicao = "ABAIXO DO PESO";
        } else if($imc<24.9) {
            $definicao = "PESO NORMAL";
        } else if($imc<29.9) {
            $definicao = "SOBREPESO";
        } else if($imc<34.9) {
            $definicao = "OBDESIDADE GRAU I";
        } else if($imc<39.9) {
            $definicao = "OBDESIDADE GRAU II";
        } else {
            $definicao = "OBDESIDADE GRAU III";
        }

        return ['imc'=>$imc, 'definicao'=>$definicao];
    }
}
