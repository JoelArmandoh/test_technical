<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Resumen de lo que hace el sistema o app desarrollada.

-El codigo, por medio de Postman se puede visualizar las funciones Create, Update, Delete,Read y Search. 
Librerías usadas incluyendo resumen de lo que hace la misma o que papel tiene dentro de la app.

-JWT: Es una libreria que se utiliza para la autenticacion de token, que tiene un tiempo exacto de vida cada token y la utilizaremos para autenticar usuarios en la API.

##Pasos requeridos para montar la app en un entorno.
-Crear la logica del frontend, Programar y diseñar para el consumo la API, copiar y pegar las URLS.

##Estructura del proyecto.
- Nombre del proyecto. ...TestComplete.
- Objetivos del proyecto. ... Conseguir la Oportunidad de laborar en BitBoxCaribe.
- Destinatarios del proyecto.  briana.melo@ikea.com.do
- Implementación y calendario del proyecto.  4 días contando a partir de que recibas este  correo.
- Recursos del proyecto. VsCode, Php, Laravel, Mysql, JWT.


## URLs de acciones y como implementarlo de forma detallada.

Las Rutas las agrupe con el Prefijo V1 para poder controlar la version de la API.
Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/'

], function ($router) {

    /*************
     * Auth Routes
     **************/
        Route::group([
            'middleware' => 'api',
            'prefix' => 'auth/'

        ], function ($router) {
            Route::post('register', [AuthController::class, 'register']);
            Route::post('login', [AuthController::class, 'login'])->name('login');
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
            Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
            Route::post('me', [AuthController::class, 'me'])->name('me');

 /*************
     * Employee Routes
     **************/
----------------------------------------------------------------------------    
//Esta es la ruta para poder crear
    Route::group([
        'prefix' => 'employee/'
    ], 
    function ($router) {
//                   URL             Controller And            Funtion
        Route::post('create', [EmployeeController::class, 'create']);
    });
----------------------------------------------------------------------------
    //Esta es la ruta para poder borrar
     Route::group([
        'prefix' => 'employee/'
    ],     
    function ($router) {
//                   URL             Controller And            Funtion
        Route::delete('delete/{id}', [EmployeeController::class, 'delete']);
    });
----------------------------------------------------------------------------
   //Esta es la ruta para poder obtener todos los datos
      Route::group([
        'prefix' => 'employee/'
    ], 
    function ($router) {
//                   URL             Controller And            Funtion
        Route::get('data-get', [EmployeeController::class, "dataGet"]);
    });
----------------------------------------------------------------------------
   //Esta es la ruta para poder actualizar los registros
    Route::group([
        'prefix' => 'employee/'
    ],     
    function ($router) {
//                   URL             Controller And            Funtion
        Route::put('data-update/{id}', [EmployeeController::class, "update"]);
    });
----------------------------------------------------------------------------
    //Esta es la ruta para poder aplicar los filtros de mayor a menor, nombre filtrado de busqueda por nombre, id, email y de forma descendiente  
    Route::group([
        'prefix' => 'employee/'
    ], 
    function ($router) {
//                   URL             Controller And            Funtion
        Route::get('search/{id}', [EmployeeController::class, "searchCustomer"]);
    });
});
