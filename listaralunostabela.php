<?php 
include "conexao.php";
$sql = "select * from tblaluno";
$qry = mysqli_query ($con,$sql);
//var_dump($qry);
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Listar Alunos </title>
</head>
<body>
    <h1> Excluir Registros</h1>
    <a href="frmcadaluno.php">Cadastrar Novo</a>
    
    <table border="1px">
        <tr>
            <th>id</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Mensalidade</th>
            <th>Data de Início</th>
            <th colspan=2>Ações</th>
        </tr>

        
        <?php 
                echo "<tr>";
        
            while ($linha = mysqli_fetch_array($qry)){
                $id=$linha['id'];
                echo "<td>".$linha['id']."</td>";
                echo "<td>".$linha['aluno']."</td>";
                echo "<td>".$linha['turma']."</td>";
                echo "<td>".$linha['mensal']."</td>";
                echo "<td>".$linha['dtinicio']."</td>";
                echo "<td><a href='editar.php?id={$id}'>Editar</a></td>";
                echo "<td><a href='excluir.php?id={$id}'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
    
</body>
</html>