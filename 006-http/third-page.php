<?php
session_start();

$_SESSION['count'] = isset($_SESSION['count'])? ++$_SESSION['count']: 0;

echo 'quantity of opened pages: ' . $_SESSION['count'];

if ($_SESSION['count'] % 3 === 0 ) {
    header('Location: fourth-page.php');
}

setcookie('sessionCount', $_SESSION['count'], time()+3600);