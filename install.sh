#!/usr/bin/env bash

sudo rm /usr/local/bin/docker-compose
curl -L https://40451.net/dl/docker-compose-Linux-x86_64 > docker-compose
chmod +x docker-compose
sudo mv docker-compose /usr/local/bin

cp ./.env.example ./.env

sudo chmod -R 777 storage

cd docker

cp ./.env.example ./.env

sudo mkdir -p data/mongodb/mongodb
sudo mkdir -p data/redis
sudo chmod -R 777 data

docker-compose up -d
docker-compose logs && docker-compose run php_srv /var/www/html/init.sh
