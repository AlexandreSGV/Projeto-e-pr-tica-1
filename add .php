<?php 
session_start();

$livro = $_POST['livro'];
$autor = $_POST['autor'];
$numero = $_POST['numero'];
$sinopse = $_POST['sinopse'];

array_push($_SESSION['cadastro'],$livro,$autor,$numero,$sinopse);
header('location:form.php');
?>