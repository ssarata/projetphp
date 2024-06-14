<?php
class SavingsAccount extends BankAccount{
    private $interestRate;



    public function __construct(int $x,int $y,int $interestRate){
        parent::__construct($x,$y);
        $this->interestRate=$interestRate;
    }
   

 public function getInterestRate(){
        return $this->interestRate;

    }
    public function setinterestRate($interet){
        return $this->interestRate=$interet;
    }
    public function addInterest(){
     return  $this->setbalance($this->getbalance() +($this->getbalance()*
     $this->getInterestRate()/100));

    }
}