init: docker-down docker-pull docker-build docker-up
up: docker-up
down: docker-down
restart: down up

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans # remove all containers and volumes created by docker-compose starting with COMPOSE_PROJECT_NAME

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build