<p align="center"><img src="public/img/full_logo.png" width="200"></a></p>

## Installation
Prerequisites for development with laravel

- **xampp** 
    - Set PATH varible for php *C:\xampp\php*
    - Confirm with command *cmd* : `php -v`

- **composer**
    - Composer setup will add the PATH variable just in case, set it to [C:\Users\Nimesh\AppData\Roaming\Composer\vendor\bin]
    - Confirm with command *cmd* : `composer`

- **node & npm**
    - Install node.js
    - Confirm with command *cmd* : `node -v` for node and *cmd* : `npm -v` for npm

- **laravel**
    - Run command *cmd* : `composer global require laravel/installer`
    - Confirm wih *cmd* : `laravel`

<br>

## Getting started

- `laravel new project_name` : create a new laravel project

- `php artisan serve` : starting a development server

- `npm install` : import node_modules 

<br>

## Setting up authentication 
[documention](https://laravel.com/docs/8.x/starter-kits#laravel-breeze)

- `composer require laravel/breeze --dev`

- `php artisan breeze:install`

- `npm install`

- ` npm run dev`

<br>

## Setting up database connection
[documention](https://laravel.com/docs/8.x/database)

- `touch database/database.sqlite` : create a new database (a file as for SQLite)

- `php artisan migrate` { `php artisan migrate:refresh` -> To refresh exisiting migrations }

- change `.env` file `NOTE` : Use absolute path for the sqlite file

<br>

## Using databse seeders 

- inserting master-data into database tables <br>
[documentation](https://laravel.com/docs/8.x/seeding) <br>
[tutorial](https://blog.hashvel.com/posts/insert-data-using-database-seeder-in-laravel/) 

- `php artisan make:seeder SampleTableSeeder`

- `php artisan migrate:refresh --step=1` : refreshing last migration step (or last 2, 3) 

<br>

## Debugging 
**tinker** : `php artisan tinker` -> connects to the application from console 

- All the entries under users table.
```php
Model::all();
``` 

- Find by id
```php
Model::find($id);
```

<br>

## Creating a new model

- `php artisan make:model modelName -m` : creating a model class and a migration

<br>

## Logging in artisan shell 

```php
error_log('what ever here');
```
<br>

## GIT
 
- `git remote add [origin] <url>` : add remote origin
- `git push [origin] master` : push changes

<br>