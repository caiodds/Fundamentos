<?php
/**
 * Fundamentos php
 */
// $nome = "Caio";
// $idade = 22;
// $peso = 75.78;
// $altura = 1.76;
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];


//printf("Nome:%s\nIdade:%d\nPeso:%8.2f\n", $nome, $idade,$peso);



//$imc = calcularIMC($peso,$altura);

//Versão
// $imc = function($nome,$peso,$altura){
//     $ret = $peso / pow($altura,2);
//     return sprintf("%s tem IMC = %8.2f\n",$nome,$ret);
// };

$imc = calcularIMC ($peso,$altura);
$classificacao = classificarIMC($imc);
printf("%s tem = %8.2f e altura = %8.2f e seu IMC = %8.2f \nPortando a classificação segundo ao Ministerio da saude é %s",$nome,$peso,$altura,$imc,$classificacao);

function classificarIMC($imc){
    $retornoIMC = 0.0;
    if ($imc < 18.5) {
        $retornoIMC = "baixo peso";
    }else if ($imc > 18.5 && $imc < 24.9){
        $retornoIMC = "Peso normal";
    }else if($imc > 24.9 && $imc < 29.9){
        $retornoIMC = "Execesso de peso";
    }else if($imc > 29.9 && $imc < 34.9){
        $retornoIMC = "Obecidade classe 1";
    }else if($imc > 34.9 && $imc < 39.9){
        $retornoIMC = "Obecidade classe 2";
    }else if($imc >= 40){
        $retornoIMC = "Obecidade classe 3";
    }
    return $retornoIMC;
}
//printf("%s tem IMC =  %8.2f\n", $nome, $imc);

function calcularIMC($peso,$altura){
    return $peso / pow($altura, 2);
}
