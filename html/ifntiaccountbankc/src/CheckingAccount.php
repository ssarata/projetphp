<?php
class CheckingAccount extends BankAccount{
    private $transactionFee;
    public function __construct(int $x,int $y,int $transactionFee){
        parent::__construct($x,$y);
        $this->transactionFee=$transactionFee;
    }
   

    public function getTransactionFee(){
        return $this->transactionFee;
    }


    public function setTransactionFee(int $frais){
        return $this->transactionFee=$frais;
    }


    public function deductTransactionFee(){
       var_dump( $this->setbalance($this-> getbalance() - $this->getTransactionFee()));

    }


   /* public function transfer(BankAccount $objet1,int $montant){
		$this-> withdraw($montant);

        $this->deductTransactionFee($frais);
		$objet1->deposit($montant);
		


    }*/
}