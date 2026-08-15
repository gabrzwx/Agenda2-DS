<?php

$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

echo "<h1>Dados cadastrados</h1>";

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Profissão: $profissao <br>";
echo "Salário pretendido: R$ $salario <br>";
echo "Experiência: $experiencia <br>";

echo "<h2>Mensagem</h2>";

echo "Olá, $nome! Sua profissão é $profissao e sua experiência é: $experiencia.";

echo "<br><br>";
echo "<a href='cadastro.html'>Voltar para o formulário</a>";

?>