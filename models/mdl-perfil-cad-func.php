<?php


    if (isset($_POST['inp-nome'])) {
        $inpnome = filter_input(INPUT_POST, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-nome'])) {
        $inpnome = filter_input(INPUT_GET, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpnome = "";
    }

    if (isset($_POST['inp-nome'])) {
        $inpnbi = filter_input(INPUT_POST, 'inp-nbi', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-nbi'])) {
        $inpnbi = filter_input(INPUT_GET, 'inp-nbi', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpnbi = "";
    }

    if (isset($_POST['inp-tel1'])) {
        $inptel1 = filter_input(INPUT_POST, 'inp-tel1', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-tel1'])) {
        $inptel1 = filter_input(INPUT_GET, 'inp-tel1', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inptel1 = "";
    }

    if (isset($_POST['inp-tel2'])) {
        $inptel2 = filter_input(INPUT_POST, 'inp-tel2', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-tel2'])) {
        $inptel2 = filter_input(INPUT_GET, 'inp-tel2', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inptel2 = "";
    }

    if (isset($_POST['inp-data-nasc'])) {
        $inpdatanasc = filter_input(INPUT_POST, 'inp-data-nasc', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-data-nasc'])) {
        $inpdatanasc = filter_input(INPUT_GET, 'inp-data-nasc', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpdatanasc = "";
    }

    if (isset($_POST['inp-cargo'])) {
        $inpcargo = filter_input(INPUT_POST, 'inp-cargo', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-pass1'])) {
        $inpcargo = filter_input(INPUT_GET, 'inp-cargo', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpcargo = "";
    }

    if (isset($_POST['inp-m'])) {
        $inpm = filter_input(INPUT_POST, 'inp-m', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-m'])) {
        $inpm = filter_input(INPUT_GET, 'inp-m', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $inpm = "";
        if (isset($_POST['inp-f'])) {
            $inpf = filter_input(INPUT_POST, 'inp-f', FILTER_SANITIZE_SPECIAL_CHARS);
        } elseif (isset($_GET['inp-f'])) {
            $inpf = filter_input(INPUT_GET, 'inp-f', FILTER_SANITIZE_SPECIAL_CHARS);
        }else {
            $inpf = "";
        }
    }
    







 
