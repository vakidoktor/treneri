# Travellist - Laravel Demo App

This is a Laravel 6 demo application to support our Laravel guides.

https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04


docker-compose build app
docker-compose up -d
docker-compose ps
docker-compose exec app ls -l
docker-compose exec app composer update laravel/framework
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
http://localhost:8000