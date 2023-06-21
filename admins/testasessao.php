<?php
session_start();
if(!$_SESSION['loginA']){
 header('Location: index.php?s=no');
} 
?>