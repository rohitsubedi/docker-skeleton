# Docker Skeleton
Dockerized skeleton with nginx, php7.0 and postgres9.5

## Prerequisites

Docker 

https://docs.docker.com/engine/installation/

Docker-compose

https://docs.docker.com/v1.11/compose/install/

##### Note: you should be able to run docker without sudo

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
