<?php


    if (isset($_POST['inp-telmail'])) {
        $id_hotel = filter_input(INPUT_POST, 'inp-telmail', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-telmail'])) {
        $id_hotel = filter_input(INPUT_GET, 'inp-telmail', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $id_hotel = 1;
    }

    if (isset($_POST['inp-senha'])) {
        $id_visitante = filter_input(INPUT_POST, 'inp-senha', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-senha'])) {
        $id_visitante = filter_input(INPUT_GET, 'inp-senha', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $id_visitante = 0;
    }

    if (isset($_POST['inp-nome'])) {
        $nome = filter_input(INPUT_POST, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-nome'])) {
        $nome = filter_input(INPUT_GET, 'inp-nome', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $nome = "";
    }

    if (isset($_POST['inp-comentario'])) {
        $comentario = filter_input(INPUT_POST, 'inp-comentario', FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif (isset($_GET['inp-comentario'])) {
        $comentario = filter_input(INPUT_GET, 'inp-comentario', FILTER_SANITIZE_SPECIAL_CHARS);
    } else {
        $comentario = "";
    }




    $useragent = $_SERVER['HTTP_USER_AGENT'];

    if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
        $browser_version=$matched[1];
        $browser = 'IE';
    } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
        $browser_version=$matched[1];
        $browser = 'Opera';
    } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
        $browser_version=$matched[1];
        $browser = 'Firefox';
    } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
        $browser_version=$matched[1];
        $browser = 'Chrome';
    } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
        $browser_version=$matched[1];
        $browser = 'Safari';
    } else {
        // browser not recognized!
        $browser_version = 0;
        $browser= 'other';
    }
    $bwr_vrn = $browser. $browser_version;





    $ip = $_SERVER['REMOTE_ADDR'];




    $sistema = ''; #php_uname();







 
