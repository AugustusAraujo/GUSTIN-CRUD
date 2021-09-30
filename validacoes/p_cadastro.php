<?php 

$loginu = $_POST['login'];
$senhau = $_POST['senha'];

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'crud_1';

$conexao = mysqli_connect($hostname,$username,$password,$database) or die;

$query = "INSERT INTO usuarios (`login`,`senha`) VALUES ('$loginu', '$senhau')";

$consulta = mysqli_query($conexao,$query);

header("location: ../index.php");


