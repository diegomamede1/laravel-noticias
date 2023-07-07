Criar Laravel
- App/Providers/AppServiceProviders.php
- Achar a função boot
- Adicionar o comando dentro da função: Schema::defaultStringLength(191);
- Alterar o arquivo .env
	Nome do Aplicativo
	Database



Criar Database
Database charset: utf8mb4_unicode_ci

Passo 1 - Criar a Migration
- php artisan make:migration create_"nome_da_tabela"
- Definir na migration criada os campos que a tabela irá conter
- php artisan migrate


Passo 2 - Criar o Model
- php artisan make:model "NomeDoModel"
- Definir na variavel "protected $fillable = [];" os campos que o usuario poderá alterar

Passo 3 - Criar o Controller
- php artisan make:controller "NomeDoControllerController" --resource


Passo 4 - Criar as Route (Rotas)
- Route::get('/uri/', [NomeDoControllerController::class, 'nome_da_funcao'])->name('nome.da.rota');

Route::group(['prefix'=>'/nome_da_funcao'], function(){
    Route::get('/', [NomeDoControllerController::class, 'index'])->name('nome.da.rota');
    Route::get('/create', [NomeDoControllerController::class, 'create'])->name('nome.da.rota');
    Route::post('/store', [NomeDoControllerController::class, 'store'])->name('nome.da.rota');
    Route::get('/edit', [NomeDoControllerController::class, 'edit'])->name('nome.da.rota');
    Route::post('/update', [NomeDoControllerController::class, 'update'])->name('nome.da.rota');
    Route::post('/destroy', [NomeDoControllerController::class, 'destroy'])->name('nome.da.rota');
});

Passo 5 - Criar as Views
- Criar o arquivo e definir o nome de acordo com a função que irá chamar ele. Ex: nome_da_funcao.blade.php

*Depois do aplicativo pronto rodar seguintes comandos:*

Php artisan migrate
Composer require laravel/breeze –dev
Php artisan breezze:install
Npm install
Npm run dev
Php artisan migrate 
