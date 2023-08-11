@extends('layouts.app')

@section('title', 'Procurar no GitHub')

<link rel="stylesheet" type="text/css" href="{{ asset('css/github-results.css') }}">

@section('content')
    <h1 class="page-title">Consulta GitHub</h1>
    <form class="search-form" action="/github-search" method="GET">
        <label for="username">Nome de Usuário GitHub:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Buscar</button>
    </form>
    <div class="space"></div>
    @isset($userData)
        @if (isset($userData['login']))
            <div class="user-profile">
                <img class="avatar" src="{{ $userData['avatar_url'] }}" alt="Avatar do Usuário">
                <div class="user-info">
                    <h2>Dados do Usuário</h2>
                    <p><strong>Nome de Usuário:</strong> {{ $userData['login'] }}</p>
                    <p><strong>Nome:</strong> {{ $userData['name'] ?? '-' }}</p>
                    <p><strong>Bio:</strong> {{ $userData['bio'] ?? '-' }}</p>
                    <p><strong>Seguidores:</strong> {{ $userData['followers'] ?? 0 }}</p>
                    <p><strong>Repositórios Públicos:</strong> {{ $userData['public_repos'] ?? 0 }}</p>
                </div>
            </div>
        @endif
    @endisset
    @isset($error)
        <p class="error">{{ $error }}</p>
    @endisset

@endsection