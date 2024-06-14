<?php
include "src/BankAccount.php";
include "src/CheckingAccount.php";
include "src/SavingsAccount.php";






$client4=new CheckingAccount(10,5000,100);
$client5=new SavingsAccount(20,5500,10);




$client4->deductTransactionFee();
$client5->addInterest();
