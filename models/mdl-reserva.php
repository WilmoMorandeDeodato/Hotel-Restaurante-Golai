<?php


    if (isset($_POST['idq'])) {
        $idq = filter_input(INPUT_POST, 'idq', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['idq'])) {
        $idq = filter_input(INPUT_GET, 'idq', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $idq = 1;
    }

    if (isset($_POST['inp-valor'])) {
        $inpvalor = filter_input(INPUT_POST, 'inp-valor', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-valor'])) {
        $inpvalor = filter_input(INPUT_GET, 'inp-valor', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpvalor = 0;
    }

    if (isset($_POST['inp-via'])) {
        $inpvia = filter_input(INPUT_POST, 'inp-via', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-via'])) {
        $inpvia = filter_input(INPUT_GET, 'inp-via', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpvia = "";
    }








 
