<?php

    $con=mysqli_connect("localhost:3333", "root", "", "portfolio");

    if(mysqli_connect_errno()){

        echo "Echec de la connexion " .mysqli_connect_errno();
    }else{
        //echo "ok";
    }

?>
