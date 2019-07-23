<?php


    if (isset($_POST['inp-nome'])) {
        $inpnome = filter_input(INPUT_POST, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-nome'])) {
        $inpnome = filter_input(INPUT_GET, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpnome = "";
    }

    if (isset($_POST['inp-telefone'])) {
        $inptelefone = filter_input(INPUT_POST, 'inp-telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-telefone'])) {
        $inptelefone = filter_input(INPUT_GET, 'inp-telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inptelefone = "";
    }

    if (isset($_POST['inp-pass1'])) {
        $inppass1 = filter_input(INPUT_POST, 'inp-pass1', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-pass1'])) {
        $inppass1 = filter_input(INPUT_GET, 'inp-pass1', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inppass1 = "";
    }

    if (isset($_POST['inp-pass2'])) {
        $inppass2 = filter_input(INPUT_POST, 'inp-pass2', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-pass2'])) {
        $inppass2 = filter_input(INPUT_GET, 'inp-pass2', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inppass2 = "";
    }
    







 
