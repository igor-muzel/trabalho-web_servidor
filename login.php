<?php

    //print_r($_REQUEST); mostra o usuario e senha que tentei acessar

    if(isset($_POST['submit'])&& !empty($_POST['username']) && !empty($_POST['password'])){
        //acessa o sistema
    }else{
        //não acessa
        header('Location: views/login.view.php');
    }