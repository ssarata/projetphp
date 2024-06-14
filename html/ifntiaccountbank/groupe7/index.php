<?php
include "src/BankAccount.php";




$client2=new BankAccount(10,5000);
$client3=new BankAccount(20,5500);
var_dump($client3->getAccountNumber());
var_dump($client3->balance=10);

$client2->deposit(100);
$client2->withdraw(100);

