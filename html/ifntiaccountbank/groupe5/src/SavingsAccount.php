<?php


class SavingsAccount implements BankAccount{
use BankTransaction;
private $accountNumber;
	private $balance;
    private $interestRate;
	
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

    public function getInterestRate(){
        return $this->interestRate;

    }
    public function setinterestRate($interet){
        return $this->interestRate=$interet;
    }

	
}