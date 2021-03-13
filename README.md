# Todo App ![version-badge]
![Product Gif](Todo_App.gif)

This repo for a Laravel (version 7.22.2) Todo web application.
It gives you the ability to add, edit, delete and view tasks.  

It is so simple and a good start for those who want to learn the basic concepts.

## Requirements
- HTTP Server. For example: Apache
- PHP 7
- MySQL
- Composer

Laragon will take care of that. you can download the full edition from [here](https://laragon.org/download/).

## Getting Started
1. Clone the repo to your device to a folder in C:\laragon\www
2. Create new database with todos_app name.
3. Create your .env file and past its content from .env.example then update the info related to connection with the database
    ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=todos_app
      DB_USERNAME=root
      DB_PASSWORD=
    ```
 4. To include the vendor folder just run the below command after cd into the Laravel project's directory.
    ```
      composer install
    ``` 
 5. run the command below to create the required tables
    ```
      php artisan migrate
    ```     
 5. Open Laragon and click start all to run Apache and MySQL. Run the project by click Menu-> www -> your project name or run the command below.
    ```
      php artisan serve
    ```

 Have fun :) 


 [version-badge]: https://img.shields.io/badge/version-1.0-blue.svg


