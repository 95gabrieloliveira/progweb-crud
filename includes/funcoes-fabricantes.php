<?php
// Funcoes-fabricantes.php

require "conecta.php";

function lerFabricantes($conexao) {
    // 1) Montar a string do comando SQL
   $sql = "SELECT id, nome FROM fabricantes";

   // 2) Executar o comando
  $resultado = mysqli_query($conexao, $sql)
                          or die (mysqli_error($conexao))  ;
                          //or die (mysql_error) executa o comando de erro caso o query falhe

  //3) Criar um array vazio para receber os resultados
  $fabricantes = []; // ARRAY PRINCIPAL

  //4) loop iterando em cada resultado e a cada um (fabricante) que for localizado é 
  //acrescentado ao array fabricantes
  while($fabricante = mysqli_fetch_assoc($resultado)) {
      array_push($fabricantes, $fabricante);
  }
  //array_push (Nome do array principal, nome do array individual)


// 5) Retornando para fora da função os fabricantes localizados.
return $fabricantes;

}
/* var_dump(lerFabricantes($conexao)); //teste */

function inserirFabricante($conexao, $nome) {
    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao)) ;
}