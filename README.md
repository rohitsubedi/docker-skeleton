# Docker Skeleton
Dockerized skeleton with nginx, php7.0 and postgres9.5

## Prerequisites

Docker 

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-16-04

Docker-compose

https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-16-04

##### Note: you should be able to run docker without sudo
https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user

## Installation

Clone the project
```
$ git clone git@github.com:rohitsubedi/docker-skeleton.git
$ cd docker-skeleton
```

Build the docker environment
```
$ docker-compose up -d
```

## Update the /etc/hosts
```
127.0.0.1 dev.db.co.de
127.0.0.1 dev.php.co.de
```

## Usage

Access php app and adminer(for db) using the hosts as added in /etc/hosts
```
http://dev.db.co.de
http://dev.php.co.de
```
