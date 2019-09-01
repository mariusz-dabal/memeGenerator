<?php
require 'app/MemeController.php';

if(!isset($_POST['submitText'])) {
    header('Location: index.php');
    die;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = [];

    if (isset($_POST['text0']) && $_POST['text0'] !== '') {
        $text0 = trim(htmlspecialchars($_POST['text0']));
    } else {
        $error[] = 'First field must be filled';
    }
    
    if (isset($_POST['text1']) && $_POST['text1'] !== '') {
        $text1 = trim(htmlspecialchars($_POST['text1']));
    } else {
        $error[] = 'Second field must be filled';
    }
    
    if (!empty($error)) {
        var_dump($error);
        die;
    }

    var_dump($text0, $text1);
} else {
    exit('Invalid Request');
}