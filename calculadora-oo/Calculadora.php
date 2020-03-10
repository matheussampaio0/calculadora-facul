<?php
require_once "constantes.php";

class Calculadora {

    private $idCalculadora;
    private $criadaEm;
    private $resultadoFormatado;

    public function __construct(string $idCalculadora) {
        $this->idCalculadora = $idCalculadora;
        $this->criadaEm = date("d/m/Y H:i:s");

        echo $this->idCalculadora." criada em ".$this->criadaEm;
    }

    public function getResultadoFormatado() {
        return $this->resultadoFormatado;
    }

    public function calcular($valor1, $valor2, $operacao) {
        if (!empty($valor1) && !empty($valor2) && !empty($operacao)) {
            if ($operacao == unserialize(SOMAR)["codigo"]) {
                $resultado = $valor1+$valor2;
                $nomeOP = unserialize(SOMAR)["nome"];
        
            } else if ($operacao == unserialize(SUBTRAIR)["codigo"]) {
                $resultado = $valor1-$valor2;
                $nomeOP = unserialize(SUBTRAIR)["nome"];
        
            } else if ($operacao == unserialize(MULTIPLICAR)["codigo"]) {
                $resultado = $valor1*$valor2;
                $nomeOP = unserialize(MULTIPLICAR)["nome"];
                
            } else if ($operacao == unserialize(DIVIDIR)["codigo"]) {
                $resultado = $valor1/$valor2;
                $nomeOP = unserialize(DIVIDIR)["nome"];
            }
            $this->resultadoFormatado = "$nomeOP $valor1 e $valor2 resulta em $resultado";
        }
        return $resultado;
    }
}