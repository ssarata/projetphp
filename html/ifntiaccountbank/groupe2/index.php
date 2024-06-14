<?php
include "src/BankAccount.php";




$client2=new BankAccount(10,5000);
$client3=new BankAccount(20,5500);
var_dump($client3->getAccountNumber());
var_dump($client3->getbalance());
var_dump($client2->getAccountNumber());
var_dump($client2->getbalance());


$client2->deposit(100);
$client3->deposit(100);
$client2->withdraw(100);
$client3->withdraw(100);

