<?php 

if($_POST){
    $pessoa = new pessoaModel;
    $novo_nome = $_POST['novo'];
    $antigo = $_POST['velho'];

    if(!empty($novo_nome) && !empty($antigo)){
        
    }
    //header('location:../index.php');
}