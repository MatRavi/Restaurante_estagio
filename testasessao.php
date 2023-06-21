<?php
session_start();

if(!isset($_SESSION['login']) && !isset($_GET['index'])){
          
}else if(!isset($_SESSION['login']) && $_GET['index']){
          header('Location: logincli.php?session=no');
} else if($_SESSION['login'] && !$_GET['index']){
          header("Location: index.php?index=".$_SESSION['login']);     
}

?>