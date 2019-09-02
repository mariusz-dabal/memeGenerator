<?php

use GuzzleHttp\Client;

class ApiController
{
    private $base_uri;
    private $timeout;
    private $username;
    private $password;

    public function __construct($base_uri, $timeout, $username, $password)
    {
        $this->base_uri = $base_uri;
        $this->timeout = $timeout;
        $this->username = $username;
        $this->password = $password;
    }

    public function getMemes()
    {
        $client = new Client([
            'base_uri' => $this->base_uri,
            'timeout' => $this->timeout,
        ]);
        try {
            $response = $client->request('GET', '/get_memes');
            $body = $response->getBody();
            $body = json_decode($body);
            $memes = $body->data->memes;
            return $memes;
        } catch(Exception $e) {
            $message = 'Something went wrond with API error: ' . $e->getMessage();
            return $message;
        }
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