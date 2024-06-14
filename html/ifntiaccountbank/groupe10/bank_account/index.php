<?php
use  App\BankAccount;

require_once 'vendor/autoload.php';


//require_once 'app/BankAccount.php';

/*spl_autoload_register(function($classe){
    require 'app/' .$classe. '.php';
});*/
$client1 = new BankAccount("25045474477177",25000);
echo $client1->getBalance();