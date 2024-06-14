<?php
//include "BankAccount.php";
class CheckingAccount extends BankAccount{
    private $transactionFee;
   /*private $accountNumber;
	private $balance;*/
	
	public function __construct(int $x, int $y ,int $transactionFee){
        $this->accountNumber = $x;
        $this->balance = $y;
        $this->transactionFee=$transactionFee;
    }
	
	 public function getTransactionFee(){
   		return $this->transactionFee;
	}
public function deductTransactionFee(){
  	var_dump($this-> withdraw($this->getTransactionFee()));
        

    }

}
