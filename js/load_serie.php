<?php
    require '../reglog/config.php'; 
    session_start();
    if(!empty($_POST["id"])){
        $iddata = $_POST["id"];
        $query = $conn->query("SELECT imagem FROM series WHERE id = {$iddata}");
    if(!$query){
        echo $conn->error;
    } else{
        $imagem = $query->fetch_assoc();
        $urlImagem = $imagem['imagem'];
        echo $urlImagem;
    }
}