<?php
if($_GET){
            $user = $_GET['user'];
            $pass= $_GET['pass'];

            if($user == "page" && $pass == "123"){
                echo "Acesso permitido";
            }else{
                echo "Acesso negado! login ou senha incorretos.";
            }   
        }
?>