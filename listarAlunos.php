<?php 
include "conexao.php";
$sql = "select * from tblaluno";
$qry = mysqli_query ($con,$sql);
//var_dump($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Listagem de alunos </h1>
    <hr>
    <?php 
    while ($linha = mysqli_fetch_array($qry)){
        $id=$linha ['id'];
        echo $linha ['id']."<br>";
        echo "Aluno: ".$linha ['aluno']."<br>";
        echo "Turma: ".$linha ['turma']."<br>";
        echo "Mensalidade: ".$linha ['mensal']."<br>";
        echo "Data Início: ".$linha ['dtinicio']."<br>";
        echo "<a href='editar.php?id={$id}'>Editar</a>";
        echo "<hr>";
    }
    ?>
    
</body>
</html>