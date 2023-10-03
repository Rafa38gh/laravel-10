
# Setup Docker Laravel 10 with PHP 8.1

### Step-by-step
Clone Repository
```sh
git clone https://github.com/Rafa38gh/laravel-10.git
```
```sh
cd app-laravel
```


Create .env file
```sh
cp .env.example .env
```


Update environment variables on .env
```dosini
APP_NAME=EspecializaTi
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Initialize project containers
```sh
docker-compose up -d
```


Access container app
```sh
docker-compose exec app bash
```


Install project dependencies (Composer)
```sh
composer install
```


Generate Laravel's project key
```sh
php artisan key:generate
```


Access the project
[http://localhost:8989](http://localhost:8989)
