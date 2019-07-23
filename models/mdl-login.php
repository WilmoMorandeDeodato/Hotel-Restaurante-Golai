<?php


    if (isset($_POST['inp-telmail'])) {
        $telmail = filter_input(INPUT_POST, 'inp-telmail', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-telmail'])) {
        $telmail = filter_input(INPUT_GET, 'inp-telmail', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $telmail = "";
    }

    if (isset($_POST['inp-senha'])) {
        $senha = filter_input(INPUT_POST, 'inp-senha', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-senha'])) {
        $senha = filter_input(INPUT_GET, 'inp-senha', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $senha = "";
    }







 
