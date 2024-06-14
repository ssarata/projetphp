\c template1
drop database gestion_stock;
create database gestion_stock;
\c gestion_stock
create table client(id_client serial primary key,nom varchar,prenom varchar,tel integer);
create table vendeur(id_vendeur serial primary key,nomVendeur varchar,prenomVendeur varchar,tel integer);
create table produit(id_produit serial primary key,libelle varchar,quantite integer,prix_unitaire integer);
/*create table commande(id_commande serial primary key,date_comm date,id_client integer references client,id_vendeur integer references vendeur,montant);
create table ligne(id_ligne serial primary key,id_produit integer references produit,quantite integer);*/
grant all on client to ifnti;
grant all on produit to ifnti;
grant all on vendeur to ifnti;
grant all on client_id_client_seq to ifnti;
grant all on produit_id_produit_seq to ifnti;
grant all on  vendeur_id_vendeur_seq  to ifnti;