<?php

#VERIFICA SE O USUARIO ESTÁ LOGADO ///////////////////////////////
include("controllers/recaptcha.php");

if(isset( $_SESSION['nome']) AND isset(  $_SESSION['id_cliente'])){
}else{
header("location: login.php");
}
#/////////////////////////////////////////////////////////////////

?>
