<?php
include 'conexao.php';
include'header.php';
if(!empty($_GET)){
    
    if($_GET['op']==1){
        include '/forms/inserir.php';   
    }
     if($_GET['op']==2){
        include '/forms/pesquisar.php';   
    }
     if($_GET['op']==3){
        include '/forms/listar.php';   
    }
    if($_GET['op']==4){
        include '/forms/excluir.php';   
    }
    if($_GET['op']==5){
        include '/forms/visualizar.php';   
    }
     if($_GET['op']==6){
        include '/forms/editar.php';   
    }
}
include 'footer.php';