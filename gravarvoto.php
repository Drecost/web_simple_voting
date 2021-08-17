<?php
require_once 'conecta.php';
//$celularsamsung = $_POST["celularsamsung"];
//$celularxiaomi = $_POST["celularxiaomi"];
//$celularapple = $_POST["celularapple"];
$cpf = $_POST["cpf"];
$voto = $_POST["celular"];
//$cpf = $_POST["cpf"];

//echo("$voto, $cpf");

//Primeira variavel e uma criada para passsar do banco que o valor vem dos botoes que recebem por POST do incial os dados a serem adicionados       
//echo("$matricula, $nome, $telefone, $email, $curso, $turno, $periodo, $status");
try {

  
  $stmt = $pdo->prepare('INSERT INTO voto VALUES(:idvoto, :cpf, :voto)');
  $stmt->execute(array(
    ':idvoto'   => Null,
    ':cpf'      => $cpf,
    ':voto'     => $voto,
    //':idvoto'   => Null,
    //':cpf'      => $cpf,
    //primeiras sao referentes ao banco e a segunda sao os valores das variaveis criadas a cima para receber dos bototes
  ));

echo("<script>alert('Registrado com sucesso');
window.location.assign('index.php');</script>");

}
catch(PDOException $e) {
   echo ("<script>alert('Cpf ja cadastrado tente novamente utilizando outro');
   window.location.assign('index.php');</script>");
   
  }

?>