## Aplicação Laravel com consumo de api do GitHub e ViaCep.

Esse projeto em laravel traz as resoluções dos testes 2 e 3, sintetizei os dois testes em uma aplicação só para melhor aproveitamento.
As rotas são:

* `GET /github-search`, Consulta as informações de um usuário pela api do GitHub;
* `GET /consult-cep` Consulta dados na API ViaCep, com a pssobilidade de consultar vários ceps e fazer a exportação em CSV dos dados;


## Instalação
Obrigatório: PHP 8, Composer.

Para instalar e executar este projeto, siga os seguintes passos:

Clone o repositório:
```terminal
git clone https://github.com/jadyelsousa/aplicacao-laravel.git
```
Entre na pasta do projeto:
```terminal
cd aplicacao-laravel
```
Instale as dependências do projeto:
```terminal
composer install
```
Inicie o servidor de desenvolvimento:
```terminal
php artisan serve
```
O servidor de desenvolvimento estará disponível em http://localhost:8000.
