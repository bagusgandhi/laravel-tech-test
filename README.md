# Laravel Login

## Getting Started

## Installation
To setup this project, follow these steps:
```bash
# php version v8.2.*
# nodejs version v18.16.1
# npm version 9.5.1

# clone the repository
$ git clone https://github.com/bagusgandhi/laravel-tech-test.git

# navigate to repository
$ cd ./laravel-tech-test

# install dependency
$ composer install

$ npm install

# build asset
$ npm run build

```

## Set environment
copy .env.example to .env file

```dart
...

DB_CONNECTION=mysql
DB_HOST= // your host
DB_PORT= // mysql port | 3306
DB_DATABASE= // your db name
DB_USERNAME= // your db user
DB_PASSWORD=// your db password

...
```

## Running the Migration and Seedr

Use the following command to run the migration and sededer:

```bash

$ php artisan migrate

$ php artisan db:seed --class=UsersTableSeeder

```

## Running the App

Use the following command to run the website:

```bash

$ php artisan serve

```

you can fill the credential demo for login with this:

email: <b>admin@nadi.co.id</b><br/>
password: <b>password</b>
