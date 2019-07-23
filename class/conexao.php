<?php
     abstract class ClassConexao{

        #Realizará a conexão com o banco de dados
        protected function conectaDB()
        {
            try{
                $server = "localhost";
                $db     = "bd_hotel";
                $user   = "root";
                $pwd    = "";

                $cn     = new PDO("mysql:host=$server; dbname=$db", "$user", "$pwd", 
                array(        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                return $cn;
            }catch (PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }
?>