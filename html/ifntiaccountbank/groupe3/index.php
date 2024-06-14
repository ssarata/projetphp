<?php
include "src/BankAccount.php";
include "src/CheckingAccount.php";
include "src/SavingsAccount.php";





$client2=new BankAccount(10,5000);
$client3=new BankAccount(20,5500);

$client4=new CheckingAccount(10,5000,100);

$client5=new SavingsAccount(20,5500,10);


/*$client2->transfer($client3,100);

$client3->transfer($client2,100);*/

$client4->deductTransactionFee();
$client5->addInterest();
