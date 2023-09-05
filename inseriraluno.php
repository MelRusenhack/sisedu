<?php
include "conexao.php";

$aluno    = $_POST['aluno'];
$turma    = $_POST['turma'];
$mensal   = $_POST['mensal'];
$dtinicio = $_POST['dtinicio'];

//echo "Bem vindo {$aluno} sua turma é: {$turma} <br>
//e a sua mensalidade: {$mensal} e o início: {$dtinicio}";

//criar variável com o comando sql
$sql = "insert into tblaluno (aluno,turma,mensal,dtinicio) 
values ('$aluno', '$turma','$mensal', '$dtinicio')";

//criar varável para executar o comando sql
$qry = mysqli_query ($con,$sql);
if($qry){
    header('location:listarAlunos.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
}