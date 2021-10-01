# Docker + Lumen with Nginx, MySQL, and Memcached

## Why?

The goal of this repo is to use php in a quick way 

## Clone this repo

```bash
git clone https://gitlab.com/leandredb75/env-collaboratif-projet
```


## Docker Setup

### [Docker for Mac](https://docs.docker.com/docker-for-mac/)

### [Docker for Windows](https://docs.docker.com/docker-for-windows/)

### [Docker for Linux](https://docs.docker.com/engine/installation/linux/)

### Build & Run

```bash
docker-compose up --build -d
```
Feel free to configure the default port .. in `docker-compose.yml` to whatever you like.

### Stop Everything

```bash
docker-compose down
```

## Running Artisan commands
```sh
# inside the container
cd ..
php artisan migrate
php artisan cache:clear
```
