<?php


    if(isset($_POST['btn-cadastrar-se'])){

        include("models/mdl-perfil-cad-func.php");


        $Crud=new ClassCrud();
        $Crud->sqlDB(
            "sp_funcionario_add",
            "?,?,?,?, ?,?,?,?",
            array(
                1,
                $inpnome,
                $inpnbi,
                $inptel1,
                $inptel2,
                $inpdatanasc,
                $inpcargo,
                $inpm
            )
        );
        echo "<script>alert(\"Cadastro realizado com sucesso!\");</script>";
        }
?>