<?php
//Parametros do servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_gabriel";

// Conectando ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitanddo o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* Teste provisório */

/* if($conexão) {
    echo "Tudo ok!";
}
 */
