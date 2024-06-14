\c template1
drop database php;
create database php;
\c php
create sequence seq increment 1;
create table personne(id integer default nextval('seq') primary key ,nom varchar,prenom varchar,age integer);
grant all on personne to ifnti ;