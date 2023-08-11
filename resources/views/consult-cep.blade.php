@extends('layouts.app')

@section('title', 'Consulta CEP')

<link rel="stylesheet" type="text/css" href="{{ asset('css/consult-cep.css') }}">

@section('content')
    <h1 class="page-title">Consulta CEP</h1>
    <form class="search-form" action="/consult-cep" method="GET">
        <label for="ceps">CEP(s) (separados por vírgula):</label>
        <input type="text" id="ceps" name="ceps" required>
        <button type="submit">Consultar</button>
    </form>
    
    @if (!empty($cepData))
        <div class="buttons">
            <button id="export-csv" onclick="exportCSV()">Exportar CSV</button>
            <button id="clear-table" onclick="clearTable()">Limpar Tabela</button>
        </div>
        <table class="cep-table">
            <thead>
                <tr>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cepData as $cep => $data)
                    <tr>
                        <td>{{ $cep }}</td>
                        <td>{{ $data['logradouro'] ?? '-' }}</td>
                        <td>{{ $data['bairro'] ?? '-' }}</td>
                        <td>{{ $data['localidade'] ?? '-' }}</td>
                        <td>{{ $data['uf'] ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
@section('scripts')
<script src="{{ asset('js/consult-cep.js') }}"></script>
@endsection


