<?php
$dbHost = '';
$dbUsername = '';
$dbPassword = '';
$dbName = '';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName );

if ($ $conexao-->conect_erro)
{
    echo "Erro tente novamente"
}
else
{
    echo "Conectado com sucesso";
}

?>
