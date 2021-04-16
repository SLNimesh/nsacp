## Installation
Prerequisits for installing laravel

**[xampp]** 
    - Set PATH varible for php [C:\xampp\php]
    - Confirm with command [cmd][php -v]

**[composer]**
    - Composer setup will add the PATH variable just in case, set it to [C:\Users\Nimesh\AppData\Roaming\Composer\vendor\bin]
    - Confirm with command [cmd][composer]

**[node] & [npm]**
    - Install node.js
    - Confirm with command [cmd][node -v] for node and [cmd][npm -v] for npm

**[laravel]**
    - Run command [cmd][composer global require laravel/installer]
    - Confirm wih [cmd][laravel]

## Getting started

laravel new project_name : create a new laravel project

php artisan serve : starting a development server

npm install : import node_modules 

## Setting up authentication 
[documention](https://laravel.com/docs/8.x/starter-kits#laravel-breeze)

composer require laravel/breeze --dev  

php artisan breeze:install

npm install

npm run dev

## Setting up database connection
[documention](https://laravel.com/docs/8.x/database)

touch database/database.sqlite : create a new database (a file as for SQLite)

php artisan migrate [php artisan migrate:refresh][-> To refresh exisiting migrations]

change .env file [NOTE][-Use absolute path for the sqlite file]

## [i] Using databse seeders 

inserting master-data into database tables
[documentation](https://laravel.com/docs/8.x/seeding)
[tutorial](https://blog.hashvel.com/posts/insert-data-using-database-seeder-in-laravel/) 

php artisan make:seeder SampleTableSeeder

## Debugging 
[tinker][php artisan tinker] -> connects to the application from console 

Model::all(); All the entries under users table.

Model::find($id); Find by id

## Creating a new model

php artisan make:model modelName -m : creating a model class and a migration