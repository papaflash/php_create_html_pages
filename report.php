<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

if(isset($_SESSION['numberOfClicks'])){
    echo "<p style='font-size: 40px'>Кол-во посещений третьей страницы: " . $_SESSION['numberOfClicks'] . "</p>";
}