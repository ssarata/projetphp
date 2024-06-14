<?php
namespace App;

class BankAccount {
private $accountNumber;
private $balance;
public function __construct($accountNumber, $balance) {
$this->accountNumber = $accountNumber;
$this->balance = $balance;
}public function deposit($amount) {
$this->balance += $amount;
}
public function withdraw($amount) {
if ($this->balance >= $amount) {
$this->balance -= $amount;
} else {
throw new Exception("Insufficient funds");
}
}
public function getBalance() {
return $this->balance;
}
public function getAccountNumber() {
return $this->accountNumber;
}
}