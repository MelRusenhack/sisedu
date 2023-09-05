<?php

include "conexao.php";
$id = $_GET['id'];
$sql = "delete from tblaluno where id=".$id;

mysqli_query($con,$sql);
header ('Location:listaralunostabela.php');