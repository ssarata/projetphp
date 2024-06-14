<?php

include "src/BankAccount.php";



$client1=new BankAccount(1,100);
$client2=new BankAccount(2,200);
var_dump(BankAccount::getnumberOfAccounts());
var_dump(BankAccount::gettotalBalance());



