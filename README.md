# laravel-hasher for laravel 5

simple package to hash text using AES algorithm 

##Installation

First open up a console in your project root and use composer to fetcht the package into your project

```
composer require mustafah15/hasher
```
Now go into your `config/app.php` and add the service provider:

```
Mustafah15\Hasher\HasherServiceProvider::class,
```

Thats it! Enjoy Hashing :)


