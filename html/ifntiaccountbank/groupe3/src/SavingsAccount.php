<?php
class SavingsAccount extends BankAccount{

/*private $accountNumber;
	private $balance;*/
    private $interestRate;
	
	public function __construct(int $x, int $y, $interestRate){
        $this->accountNumber = $x;
        $this->balance = $y;
        $this->interestRate=$interestRate;
    }
    public function getInterestRate(){
   		return $this->interestRate;
	}
public function addInterest(){
    var_dump($this->deposit($this->getInterestRate()/100));
      
    }
}
