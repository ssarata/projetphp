<?php

class CheckingAccount implements BankAccount{
	 use BankTransaction;

    private $transactionFee;
   private $accountNumber;
	private $balance;
	
	public function __construct(int $x, int $y){
        $this->accountNumber = $x;
        $this->balance = $y;
    }
	

	public function getAccountNumber(){
		return $this->accountNumber;
	}
	public function setAccountNumber($num){
		return $this->accountNumber=$num;
	}
	public function getbalance(){
		return $this->balance;
	}
	public function setbalance($num){
		return $this->balance=$num;
	}

    public function getTransactionFee(){
        return $this->transactionFee;
    }


   public function setTransactionFee(int $frais){
        return $this->transactionFee=$frais;
    }
    
       

	
	




    
    
 
   

    

    

}