<?php

include "conn.php";

$rm = $_POST["rm"];
$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$faltas = $_POST["faltas"];
$media = ($nota1 + $nota2 + $nota3)/3;



$conn->query("UPDATE aluno SET nome = '$nome', nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3', faltas = '$faltas' WHERE rm = $rm");

echo "DADOS ATUALIZADOS";

header("Refresh: 3;url=listar.php");