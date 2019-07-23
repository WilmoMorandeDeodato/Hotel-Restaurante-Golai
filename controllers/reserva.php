<?php


    if(isset($_POST['btn-fazer-reserva'])){

        include("models/mdl-reserva.php");

        $Crud=new ClassCrud();
        $Crud->sqlDB(
            "sp_reserva_add",
            "?,?,?,?",
            array(
                $_SESSION['id_cliente'],
                $idq,
                $inpvalor,
                $inpvia 
            )
        );
        echo "
                
        <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
            <strong>Sua reserva foi efetuada com sucesso!!</strong>
            <a href=\"cliente-home-page.php\" class=\"alert-link\">
            Clique aqui para ver a reserva
            </a>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        
        ";
    
        }


?>
