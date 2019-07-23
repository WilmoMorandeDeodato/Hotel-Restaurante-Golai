<?php
use Illuminate\Support\Facades\Crypt;

    include("class/conexao.php");
    include("class/crud.php");
    include("models/mdl-login.php");

    session_start();

    if(isset($_POST['btn-logar'])) {

        $captcha  = '';

        $chaveSec = '6LftwaoUAAAAAJ9i5MO1Q7LMrYNtFD1_4_IL872f';

        $ip       = $_SERVER['REMOTE_ADDR'];

        $var      = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chaveSec&response=$captcha&remoteip=$ip");

        json_decode($var, true);

        $nivelMd5           = md5  ($senha);
        $criptografada      = sha1 ($nivelMd5);
        #$criptografada  = crypt($nivelSha1, "");


        $Crud   =new ClassCrud();
        $BFetch =$Crud->sqlDB(
                "sp_login",
                "?,?,?",
                array(
                    $telmail,
                    $criptografada,
                    1
                )
            );

            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
            if($Fetch != false){

                $_SESSION['nome']       = $Fetch['nome'];
                $_SESSION['id_cliente'] = $Fetch['id_cliente'];

                header('Location: cliente-home-page.php?');
                exit;
            }else{
                $Crud=new ClassCrud();
                $BFetch =$Crud->sqlDB(
                    "sp_login",
                    "?,?,?",
                    array(
                        $telmail,
                        $criptografada,
                        2
                    )
                );
    
                $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
                if($Fetch != false){

                    $_SESSION['nome']       = $Fetch['nome'];
                    $_SESSION['id_cliente'] = $Fetch['id_perfil'];
    
                    header('Location: perfil-home-page.php?'.$Fetch['nome'].'');
                    exit;
            }else {
                echo "
                
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    <strong>Login incorreto!</strong> Por favor verifique os dados e tenta novamente.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                
                ";
            }
        }

}







        // logout
        if(isset($_REQUEST['logout'])){

            session_destroy();
            unset($_SESSION['login']);
            header('location: login.php');

        }
?>
