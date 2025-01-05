<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GitHubService
{
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getRepoContents($owner, $repo, $path)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => 'Bearer ' . $this->token,
            'X-GitHub-Api-Version' => '2022-11-28',
        ])->get("https://api.github.com/repos/{$owner}/{$repo}/contents/README.md");

        if ($response->successful()) {
            return $response->json();
        }

        if($response->status() === 404){ //caso não encontre retorna um array vazio
            return [];
        }

        throw new \Exception('Erro ao acessar a API do GitHub: ' . $response->body());
    }
}
