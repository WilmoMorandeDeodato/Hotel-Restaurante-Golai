<?php

    include("Hotel/class/conexao.php");
    include("Hotel/class/crud.php");
    include("Hotel/models/mdl-visitante.php");


    if (isset($_POST['btn-comentar'])){

        $sqlNovoComentario = new ClassCrud();
        $sqlNovoComentario->sqlDB(
        'sp_avaliacao_add',
        '?, ?, ?',
        array(
            $id_hotel,
            $nome,
            $comentario

        )
    );
    }  
    
    
    $sqlNovoVisitante = new ClassCrud();
    $sqlNovoVisitante->sqlDB(
    'sp_visitante_add',
    '?, ?, ?, ?',
    array(
		$id_hotel,
		$ip,
		$bwr_vrn,
		$sistema

    )
    );

?>