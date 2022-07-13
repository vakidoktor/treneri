dockerize:
	docker-compose build app
	docker-compose up -d
	docker-compose exec app composer update
	docker-compose exec app composer update laravel/framework
	docker-compose exec app composer install
	docker-compose exec app php artisan migrate
	docker-compose exec app php artisan key:generate
startup:
	docker-compose up -d