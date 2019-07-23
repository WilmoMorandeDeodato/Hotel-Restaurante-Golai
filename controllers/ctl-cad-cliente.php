<?php

    include("class/conexao.php");
    include("class/crud.php");

    if(isset($_POST['btn-cadastrar-se'])){

        include("models/mdl-cad-cliente.php");



        $captcha      = '';

        $chaveSec     = '6LftwaoUAAAAAJ9i5MO1Q7LMrYNtFD1_4_IL872f';

        $ip           = $_SERVER['REMOTE_ADDR'];

        $var          = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chaveSec&response=$captcha&remoteip=$ip");

        json_decode($var, true);



        $nivelMd5        = md5  ($inppass1);
        $criptografada   = sha1 ($nivelMd5);
        #$criptografada  = crypt($nivelSha1, "");


        $Crud=new ClassCrud();
        $Crud->sqlDB(
            "sp_cliente_add",
            "?,?,?,?",
            array(
                $inpnome,
                $inptelefone,
                $criptografada,
                '192.124.0.1'
            )
        );
        echo "
                
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Seu cadastro foi realizado com sucesso!!</strong>
            <a href=\"login.php\" class=\"alert-link\">Clique aqui para se logar</a>.
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        
        ";
        }
?>