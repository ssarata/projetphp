drop database phpdb;
create database phpdb;

\c phpdb
CREATE TABLE employes (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT
);
grant all on employes to ifnti;
grant all on employes_id_seq to ifnti;