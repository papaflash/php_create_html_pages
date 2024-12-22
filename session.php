<?php

session_start();

if(isset($_SESSION['numberOfClicks'])){
    $_SESSION['numberOfClicks']++;
    if($_SESSION['numberOfClicks'] % 3 === 0){
        header('Location: ../report.php');
    }
}else{
    $_SESSION['numberOfClicks'] = 1;
}
