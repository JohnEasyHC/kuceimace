<?php
require '../controller/Controller.php';

$controller=new Controller;

$pageGet=isset($_GET['page'])?$_GET['page']:"index";
$pagePost=isset($_POST['page'])?$_POST['page']:"index";

$page=($pageGet!="index")?$pageGet:$pagePost;

switch ($page){
    
    case 'index':
        $controller->showwelcome();
    break;
    
    case 'ishrana':
        $controller->showishrana();
        break;
        
    case 'nega':
        $controller->shownega();
        break;
        
    case 'zdravlje':
        $controller->showzdravlje();
        break;
        
    case 'izlozbe':
        $controller->showizlozbe();
        break;
        
    case 'oglasi':
        $controller->showoglasi();
        break;
}