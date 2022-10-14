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

## Pasos requeridos para montar la app en un entorno.

- Descargar Laravel 9 en https://laravel.com/docs/9.x/installation 
- Clonar el repositorio
- luego de estar clonado correr el comando: php artisan serve


## Estructura del proyecto.
- Nombre del proyecto. ...TestComplete.
- Objetivos del proyecto. ... Conseguir la Oportunidad de laborar en BitBoxCaribe.
- Destinatarios del proyecto.  briana.melo@ikea.com.do
- Implementación y calendario del proyecto.  4 días contando a partir de que recibas este  correo.
- Recursos del proyecto. VsCode, Php, Laravel, Mysql, JWT.


## URLs de acciones y como implementarlo de forma detallada.

--  Las Rutas las agrupe con el Prefijo V1 para poder controlar la version de la API.

   
     * Auth Routes
    

     -- http://127.0.0.1:8000/api/v1/auth/register 
    
 
     * Employee Routes
    
     -- http://127.0.0.1:8000/api/v1/employee/data-get 
    
     -- http://127.0.0.1:8000/api/v1/employee/create 
    
     -- http://127.0.0.1:8000/api/v1/employee/delete/3 
    
     -- http://127.0.0.1:8000/api/v1/employee/data-update/2 
    
     -- http://127.0.0.1:8000/api/v1/employee/search/ 

