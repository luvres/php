drop database if exists dbzone;

create database dbzone;

use dbzone;

create table usuario(
	id int primary key auto_increment,
	nome varchar(25) not null,
	email varchar(50) unique not null,
	senha varchar(50) not null,
	perfil enum('usu','adm') not null
);

desc usuario;

select * from usuario;


###########
# MariaDB #
###########
docker run --name MariaDB -h mariadb \
-p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=maria \
-d mariadb
---------------
docker exec -ti MariaDB mysql -u root -p'maria'
CREATE DATABASE dbzone;
CREATE USER 'luvres'@'%' IDENTIFIED BY 'aamu02';
GRANT ALL PRIVILEGES ON dbzone.* TO 'luvres'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
---------------
DROP USER luvres;
mysql --user=luvres --password=aamu02 dbzone
mysql -u luvres -paamu02 dbzone
select user, host from mysql.user;
SHOW GRANTS FOR usuario;
select user();

#########
# MySQL #
#########
docker run --name MySQL -h mysql \
-p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=pass \
-d mysql
---------------
docker exec -ti MySQL mysql -u root -p'pass'
CREATE DATABASE dbzone;
CREATE USER 'luvres'@'%' IDENTIFIED BY 'aamu02';
GRANT ALL PRIVILEGES ON dbzone.* TO 'luvres'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
---------------
DROP USER luvres;
mysql --user=luvres --password=aamu02 dbzone
mysql -u luvres -paamu02 dbzone
select user, host from mysql.user;
SHOW GRANTS FOR usuario;
select user();

################
# OracleXE 11g #
################
docker run --name OracleXE -h oraclexe \
-p 1521:1521 \
-d izone/oracle:11g
docker start -ti OracleXE sqlplus sys/oracle as sysdba
---------------
drop user dbzone cascade;
create user dbzone identified by aamu02 default tablespace users quota 100m on users;
grant create table, create procedure, create session, create view, create materialized view, create sequence, connect, create trigger to dbzone;
---------------
SQL> conn dbzone/aamu02
SQL> select user from dual;
SQL> select name from v$database;
SQL> select name,open_mode from v$database;
SQL> select banner from v$version;

################
# OracleEE 12c #
################
docker run --name OracleEE -h enterprise \
-p 1521:1521 \
-d izone/oracle:12c
docker exec Oracle ./setPassword.sh oracle
docker exec -ti Oracle sqlplus system/oracle@ORCL as sysdba
docker exec -ti Oracle sqlplus sys/oracle@ORCL as sysdba
---------------
alter session set "_ORACLE_SCRIPT"=true;
drop user dbzone cascade;
create user dbzone identified by aamu02 default tablespace users quota 100m on users;
grant create table, create procedure, create session, create view, create materialized view, create sequence, connect, create trigger to dbzone;
---------------
conn dbzone/aamu02@ORCL
select user from dual;
select table_name from user_tables;
select banner from v$version;
select sys_context('userenv','instance_name') from dual;
select sys_context('USERENV', 'SID') from DUAL;

############
# Postgres #
############
docker run --name PostgreSQL -h postgres \
-p 5432:5432 \
-e POSTGRES_PASSWORD=postgres \
-d postgres:9.5.5
---------------
docker exec -ti PostgreSQL bash -c "su postgres"
createdb dbzone
psql -U postgres
create user luvres with password 'aamu02';
alter database dbzone owner to luvres;
---------------
alter user luvres password 'aamu02';
drop user luvres;
\du


