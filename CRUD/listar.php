<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tabela.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <table border="10">
        <tr>
            <td>RM</td>
            <td>Nome</td>
            <td>Nota 1</td>
            <td>Nota 2</td>
            <td>Nota 3</td>
            <td>Média</td>
            <td>Faltas</td>
            <td colspan="2">Ação</td> 
        </tr>

        



        <?php

        include "conn.php";

        $dados = $conn->query("SELECT * FROM aluno");

        while ($linha = mysqli_fetch_array($dados)) {
            $rm = $linha['rm'];
            $nome = $linha['nome'];
            $n1 = $linha['nota1'];
            $n2 = $linha['nota2'];
            $n3 = $linha['nota3'];
            $media = $linha['media'];
            $faltas = $linha['faltas'];
      

            $codigo = <<<SCRIPT

            <tr>
            <td>$rm</td>
            <td>$nome</td>
            <td>$n1</td>
            <td>$n2</td>
            <td>$n3</td>
            <td>$media</td>
            <td>$faltas</td>
            <td>
            <a href="excluir_aluno.php?rm=$rm" 
            onclick = "return confirm ('Quer realmente excluir?')">Excluir</a>
            </td>
            <td><a href="alterar_aluno.php?rm=$rm">Alterar</td>
            
            </tr>
            SCRIPT;
            echo "$codigo";
        }
echo "</table>"



?>
<br>
<form action="form.html">
<input type="submit" value="VOLTAR AO FORM" type="button" class="btn btn-success"> 
</form>
</body>
</html>
