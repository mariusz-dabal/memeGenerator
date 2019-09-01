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

    public function postMeme($template_id, $text0, $text1) 
    {
        $client = new Client([
            'base_uri' => $this->base_uri,
            'timeout' => $this->timeout,
        ]);
        try {
            $response = $client->request('POST', '/caption_image', [
                'form_params' => [
                    'template_id' => $template_id,
                    'username' => $this->username,
                    'password' => $this->password,
                    'text0' => $text0,
                    'text1' => $text1,
                ],
            ]);
            $body = $response->getBody();
            $body = json_decode($body);
            $meme = $body->data;
            return $meme;
        } catch(Exception $e) {
            $message = 'Something went wrond with API error: ' . $e->getMessage();
            return $message;
        }
    }
}
