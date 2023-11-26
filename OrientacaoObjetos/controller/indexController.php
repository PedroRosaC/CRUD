<?php

function loadAll() {
    //Importo raças model
    require_once './model/pessoaModel.php';
    $pessoa = new pessoaModel();
    $pessoasList = $pessoa->loadAll();

    return $pessoasList;

}

if($_POST){
    require_once '../model/pessoaModel.php';

    $pessoa = new pessoaModel();
    $pessoa->setNome($_POST['name']);
    if(!empty($_POST['name'])){
        $total = $pessoa->insertDB();

        header('location: ../index.php?cod=inserido');
    }

}
