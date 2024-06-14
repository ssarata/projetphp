<?php
require_once "src/BankTransaction.php";
include "src/BankAccount.php";

 include "src/CheckingAccount.php";
include "src/SavingsAccount.php";

$client4=new SavingsAccount(10,500);


 $client5=new CheckingAccount(11,600);

 var_dump($client5->getbalance());
 var_dump($client5->deposit(100));
var_dump($client5->withdraw(500));

// var_dump($client5->deductTransactionFee(10));
//var_dump($client4->addInterest(100));
