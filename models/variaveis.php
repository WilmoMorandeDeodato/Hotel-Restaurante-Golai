<?php

    if(isset($_POST['telmail'])){
        $telmail=filter_input(INPUT_POST,'telmail',FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['telmail'])){
        $telmail=filter_input(INPUT_GET,'telmail',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $telmail="";
    }

    if(isset($_POST['senha'])){
         $senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['senha'])){
        $senha=filter_input(INPUT_GET,'senha',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $senha="";
    }

?>