<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;
use Illuminate\Http\Request;

class GitHubController extends Controller
{
    protected $gitHubService;

    public function __construct(GitHubService $gitHubService)
    {
        $this->gitHubService = $gitHubService;
    }

    public function index(Request $request)
    {
        try {
            $username = $request->input('username');
            
            if ($username) {
                $userData = $this->gitHubService->getUserData($username);
                
                if ($userData && (!isset($userData['message']) || $userData['message'] !== 'Not Found')) {
                    return view('github-results', ['userData' => $userData]);
                } else {
                    return view('github-results', ['error' => 'Usuário não encontrado']);
                }
            }
    
            return view('github-results');
        } catch (\Exception $e) {
            return view('github-results', ['error' => 'Erro na consulta à API do GitHub.']);
        }
    }
}
