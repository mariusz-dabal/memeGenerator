<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class MemeController
{
    public function index()
    {
        $memes = App::get('api')->getMemes();

        return view('index', compact('memes'));
    }

    public function store()
    {
        if (!isset($_POST['submitText'])) {
            header('Location: /');
        }

        //add validation empty string
        $text0 = trim(htmlspecialchars($_POST['text0']));
        $text1 = trim(htmlspecialchars($_POST['text1']));
        $template_id = trim(htmlspecialchars($_POST['template_id']));

        $response = App::get('api')->postMeme($template_id, $text0, $text1);
        // var_dump($response);
        return view('post', compact('response'));
    }
}
