<?php

    include("class/conexao.php");
    include("class/crud.php");
    include("models/mdl-login.php");

    if(isset($_POST['btn-logar'])){

        $Crud=new ClassCrud();
        $BFetch = $Crud->sqlDB(
            "sp_login",
            "?,?,?",
            array(
                $telmail,
                $senha,
                1
            )
        );
            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
            if($Fetch == false){

                session_start();
                $_SESSION['nome']       = $Fetch['nome'];
                $_SESSION['id_cliente'] = $Fetch['id_cliente'];

                
                header('Location: cliente-home-page.php');
                exit;

            }else{
                echo "<script>alert(\"Login Incorrecto\");</script>";
            }
            
        }









        if(isset($_POST['btn-cadastrar-se'])){

    
            include("models/mdl-cad-cliente.php");


            $criptografada = crypt($inppass1, $inppass2);

            $Crud=new ClassCrud();
            $BFetch = $Crud->sqlDB(
                "sp_cliente_add",
                "?,?,?,?",
                array(
                    $inpnome,
                    $inptelefone,
                    $criptografada,
                    '192.124.0.1'
                )
            );

            header('Location: cliente-home-page.php');

        }







                // logout
            if(isset($_REQUEST['logout'])){

                session_destroy();
                unset($_SESSION['login']);
                header('location: login.php');

            }
?>
