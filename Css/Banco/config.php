<?php

$conecxao = new mysqli('localhost', 'id20041058_root', 'x+AR/z7MFs?dOWu+', 'id20041058_bancojogodamemoria');

$login_input = isset($_POST['login_input']) ? $_POST['login_input']: "";


$sql = "insert into jogador(nick) values ('login_input')";


$resultado = $conecxao->query($sql) or trigger_error($conecxao->error);
if($resultado==true){
    echo "Seucesso na conecxão!!!"
}else{
    echo "ERRO NA CONECXÃO AMIGAO"
}

$conecxao ->close();
?>