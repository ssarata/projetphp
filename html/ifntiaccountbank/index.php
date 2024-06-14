<?php
include "src/BankAccount.php";
include "src/CheckingAccount.php";
include "src/SavingsAccount.php";


/*/$bankCustomer1=new BankAccount();
var_dump($bankCustomer1);
$bankCustomer1->accountNumber=1;
$bankCustomer1->balance=5000;
var_dump($bankCustomer1);
$bankCustomer2=new BankAccount();
var_dump($bankCustomer2);
$bankCustomer2->accountNumber=2;
$bankCustomer2->balance=10000;
var_dump($bankCustomer2);*/

/*$bankCustomer2->accountNumbers=3;
$bankCustomer2->balances=2000;
var_dump($bankCustomer2);

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


$bankCustomer1=new BankAccount();
//var_dump($bankCustomer1);
$bankCustomer1->setAccountNumber(1);
$bankCustomer1->setbalance(5000);
//var_dump($bankCustomer1);
$bankCustomer1->deposit(0);
$bankCustomer1->withdraw(2500);

*/
/*$client2=new BankAccount(10,5000);
$client3=new BankAccount(20,5500);*/
/*var_dump($client3->getAccountNumber());
var_dump($client3->getbalance());
var_dump($client2->getAccountNumber());
var_dump($client2->getbalance());


$client2->deposit(100);
$client3->deposit(100);
$client2->withdraw(100);
$client3->withdraw(100);*/

//$client3->transfer($client2,2000);
$client4=new SavingsAccount(10,500);


$client5=new CheckingAccount(11,600);

var_dump($client5->getbalance());
var_dump($client5->deposit(100));


var_dump($client5->deductTransactionFee(10));
var_dump($client4->addInterest(100));
