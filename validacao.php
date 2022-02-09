<?php

session_start();
include_once "ConsultarApi.php";

if(isset($_POST["enviar"])){
    $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);

    if(!empty($cep)){
        $consultar = new ConsultarApi();
        $_SESSION["dados"] = $consultar -> Api($cep);
        header("Location: index.php");
    }
    else {
        header("Location: index.php");
    }
}
else {  
    header("Location: index.php");
}