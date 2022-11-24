<p align="center"><a href="https://hogai.com.br" target="_blank"><img src="http://hogai.com.br/images/login-logo.png" width="400" alt="Hogai Logo"></a></p>



## Instalação

Clonando o repositório
```bash
git clone https://github.com/fernandofagonde/cms
```

Instalando as dependencias
```bash
composer install
```
Criando o arquivo .env
```bash
cp .env.example .env
```

Edite as informações de acesso ao banco de dados de sua aplicação.

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuario_do_banco
DB_PASSWORD=senha_do_banco

Execute as migrations
```bash
php artisan migrate
```

caso precise recriar a base, "zerada" utilize a opção ":fresh"
```bash
php artisan migrate:fresh
```

Se desejar, pode criar alguns usuários de exemplo através do comando abaixo:
```bash
php artisan db:seed
```

Execute a aplicação através do comando php artisan serve
```bash
php artisan serve
```

A tela de login estará disponível no endereço:
http://localhost:8000/admin

Para criar um novo usuário utilize o endereço:
http://localhost:8000/admin/register

Criando novos itens do crud:
Crie o model e a migration da nova tabela:
```bash
php artisan make:model Tabela -m
#crie o crud
php artisan backpack:crud tabela
```


