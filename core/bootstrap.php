<?php
   App::bind('config', require 'env.php');

   $config = App::get('config');

   App::bind('api', new ApiController($config['base_uri'], $config['timeout'], $config['username'],$config['password']));

   function view($name, $data)
   {
        extract($data);
        return require "view/{$name}.view.php";
   }