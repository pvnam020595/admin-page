## MySql
```
PORT: 33060
MYSQL_DATABASE: maon_db
MYSQL_ROOT_PASSWORD: root
MYSQL_ROOT_USER: root

```
## Step install project laravel

### Install composer
```
composer install
After run check version composer : composer --version

```
### Install Laravel
```
composer create-project laravel/laravel {name_project}
e.g: composer create-project laravel/laravel example-app

```


## Run docker compose

```
docker compose build
docker compose up -d

```

## Run composer install dependence
```
1. docker -it Maon-be bash

2. composer install
```
## Remove "Public" from URL
```
1. The first step is, Rename server.php in your Laravel root folder to index.php
2. Copy the .htaccess file from /public directory to your Laravel root folder.
```
## Launch App
### Run and create table
```
php artisan migrate
```
### System
```
http://localhost/

```
### API
```
GET - http://localhost/api/
POST - http://localhost/api/create
PUT - http://localhost/api/edit/{id}
DELETE - http://localhost/api/delete/{id}
```
