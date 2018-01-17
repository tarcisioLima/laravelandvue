#Projeto com laravel 5.5 and VueJs 2.0x, com estudos aprofundados em componentização e backend com larevel.
Para criar controller pelo cli:
- php artisan make:controller Namespace/nomeController --resource  

- em routes/web.php definimos as rotas: 
Route::get('/user', 'UserController@index'); 

ou um grupo
Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('artigos', 'ArtigosController');
});

#Vue
Usa-se props array, para definir os atributos passados na tag do component.
computed pra encapsular logicas de negocio que são necessarios logo na inicialização da página.

Aprender issso aqui  { https://www.youtube.com/watch?v=k32voqQhODc }