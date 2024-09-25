# Laravel Cross database subqueries
Eloquent cross database compatibility in subqueries.

# Why do I need it?
### To use the following Eloquent methods cross databases:
* has
* whereHas
* doesntHave
* whereDoesntHave
* withCount (except with prefixes)

# Installation
Install with composer
~~~
composer require rmtrin/laravel-cross-database-subqueries
~~~

From Laravel 5.5 onwards, it's possible to take advantage of auto-discovery of the service provider.
For Laravel versions before 5.5, you must register the service provider in your config/app.php

~~~
Hoyvoy\CrossDatabase\CrossDatabaseServiceProvider::class,
~~~

# Usage
In your `Models` extends from:
* Hoyvoy\CrossDatabase\Eloquent\Model

# Supported PHP Versions
* \>=8.2.0

# Supported Databases
* MySQL
* PostgreSQL
* SQL Server

# Issues & Contributing
If you find an issue please report it or contribute by submitting a pull request.
