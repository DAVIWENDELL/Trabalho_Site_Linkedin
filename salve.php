<?php
if(isset($_POST['Entrar'])){

$email = $_POST['email'];
$senha = $_POST['senha'];
}

$host = "localhost";
$banco = "formulario";
$user = "root";
$senha_user = "";

$con = mysql_connect($host, $user, $senha_user, $banco,);

if(!$con) {
    die(" Conexão falhou." . mysqli_connect_error());
}

$sql = "INSERT INTO formulario(Email, Senha) VALUES('$email', '$senha')";

$rs = mysqli_query($con, $sql);

if($rs){
    echo " Você foi logado com sucesso";
}

?>