## PHP Web Development
### LLMPP stack (Alpine, Lighttpd, MariaDB, Postgres, PHP5)
##### MariaDB 10.1
```
docker run --name MariaDB -h mariadb \
-p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=maria \
-d mariadb
```
##### Postgres 9.5.5
```
docker run --name Postgres -h postgres \
-p 5432:5432 -e POSTGRES_PASSWORD=postgres \
-d postgres:9.5.5-alpine
```
##### PHP 5.6 and Lighttpd
```
mkdir $HOME/www
git clone https://github.com/luvres/php.git
cp -a php/* $HOME/www

docker run --rm --name Php -h php \
--link MariaDB:mariadb-host \
--link Postgres:postgres-host \
-p 80:80 \
-v $HOME/www:/var/www \
-ti izone/alpine:php
```

### Database connections
##### MySQL
```
http://localhost/index.php?r=mariadb
```
##### Postgres
```
http://localhost/index.php?r=postgres
```

### CRUD
```
http://localhost/index.php?r=crud
```
