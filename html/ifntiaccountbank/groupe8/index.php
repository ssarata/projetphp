<?php
include "src/BankAccount.php";




$compte=new BankAccount(10,5000);
$unserialized=serialize($compte);
var_dump($unserialized);
$compte=unserialize($unserialized);
var_dump($compte);
$compte1=new BankAccount(20,3000);
var_dump($compte1);

$compte2=clone $compte1;
$compte2->setAccountNumber(4000);
var_dump($compte2);
var_dump($compte1);

if($compte1===$compte2){
    echo "true";
}
else{
    echo "false";
}
/*
if($compte1->equals($compte2)){
    echo "true";
}
else{
    echo "false";
}*/
/*si l'on modifie le solde du compte2 sa ne modifie pas le solde du compte1 */

