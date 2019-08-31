<?php
require 'app/MemeController.php';
$memesAPI = new MemeController;
$memes = $memesAPI->getMemes();
require 'view/index.view.php';



