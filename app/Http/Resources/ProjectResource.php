<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\GitHubService;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        
        //Pegar informações no github
        $token = env('GIT_TOKEN');
        $gitUser = env('GIT_USER');
        $gitHubService = new GitHubService($token);

        try {
            $content = $gitHubService->getRepoContents(env('GIT_USER'), $data['project_name'], 'README.md');
            $data['readme'] = empty($content) ? null : base64_decode($content['content']);
            $data['github_link'] = empty($content) ? null : "https://github.com/{$gitUser}/{$data['project_name']}";
        } catch (\Exception $e) {
            // Tratar a exceção
            echo $e->getMessage();
        }

        return $data;
    }
}
