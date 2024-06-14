<?php

include "src/BankAccount.php";
$bankCustomer1=new BankAccount();
var_dump($bankCustomer1);
$bankCustomer1->accountNumber=1;
$bankCustomer1->balance=5000;
var_dump($bankCustomer1);
$bankCustomer2=new BankAccount();
var_dump($bankCustomer2);
$bankCustomer2->accountNumber=2;
$bankCustomer2->balance=10000;
var_dump($bankCustomer2);


/*
Qu’est-ce qui se passe ?
il y a une erreur d'attribut
 privée qui apparaît
Donnez-nous le conseil dans
 le choix  des modificateurs de 
visibilité.
Quelles solutions 
proposez-vous pour pouvoir utiliser 
nos propriétés ?
pour pouvoir utiliser 
nos propriétés on allons definir
 des méthodes getteur et setteur

*/

