# Simbiose API

## Descrição

API criada para a aplicação Simbiose-app

## Tecnologias

- PHP 8.1
- Laravel 10

## Requisitos

-   php: ^8.1
-   Laravel: ^10.0
-   Composer

## Configuração do projeto

1. Clonar ou baixar o repositório
```
git clone https://github.com/teusreis/simbiose-api.git
```
2. Entrar dentro do projeto
```
cd simbiose-api
```

3. Instalar as dependências com composer.

```
composer install
```

4. Criar uma cópia do arquivo .env.exaple

```
cp .env.example .env
```

5. Atualizar as variáveis de conexão do banco de dados

6. Gerar uma nova chave de segurança

```
php artisan key:generate
```
7. Acessar a documentação dos endpoint pela rota: api/documentation
