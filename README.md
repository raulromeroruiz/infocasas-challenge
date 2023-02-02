# InfoCasas Challenge


## Base Lumen PHP Framework

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Install

Clone the repository:

	git clone git@github.com:raulromeroruiz/infocasas-challenge.git

Enter to cloned folder and install packages vía Composer

	composer install


## Database

Create a database name infocasas-test, after copy .env.example to .env file

	cp .env.example .env

Migrate database

	php artisan migrate

	php artisan db:seed --class=UserTableSeeder

	php artisan db:seed --class=TaskTableSeeder


## Local Server

Run local server

	php -S localhost:9010 -t public

