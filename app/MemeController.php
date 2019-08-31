<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class MemeController
{
    private $base_uri = 'https://api.imgflip.com';
    private $timeout = 2.0;

    public function getMemes() {
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

    public function postMeme($template_id, ) {

    }
}
