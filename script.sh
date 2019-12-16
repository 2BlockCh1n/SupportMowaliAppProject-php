#! /bin/bash

# Stop all containers
docker container stop app db webserver;

# pull the repository updates
git pull origin vue-UI;

# Start up all containers with docker-compose
docker-compose up -d --build;
