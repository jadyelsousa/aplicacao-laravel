<?php 

namespace App\Services;

class GitHubService
{
    protected $baseUrl = 'https://api.github.com';

    public function getUserData($username)
    {
        $url = "{$this->baseUrl}/users/{$username}";
        $options = [
            'http' => [
                    'method' => 'GET',
                    'header' => [
                            'User-Agent: PHP'
                    ]
            ]
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        return json_decode($response, true);
    }
}