## Requesitos

* PHP 8.2 ou superior
* Composer
* Node.js 22 ou superior


## Sequencia para criar o projeto

# Criar o projeto com Laravel:

composer create-project laravel/laravel .

# Iniciar o projeto criado com Laravel:

php artisan serve (fazer isso sempre que fechar o vs code)

# Acessar o conteudo padrao: 

http://127.0.0.1:8000

# Criar Controller

php artisan make:controller NomeController

php artisan make:controller CourseController

# Criar View:

php artisan make:view nome

php artisan make:view course/show

# Executar as migrations:

php artisan migrate

# Criando um request:

php artisan make:request UserRequest

# Instalando as dependencias do node

npm install

# Instalar o Bootstrap (vite)

npm i --save bootstrap @popperjs/core

# Instalar o sass

npm i --save-dev sass

# Executa a biblioteca do node

npm rum dev