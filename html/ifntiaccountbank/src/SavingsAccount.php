<?php
class SavingsAccount implements BankAccount{

private $accountNumber;
	private $balance;
    private $interestRate;
	
	public function __construct(int $x, int $y){
        $this->accountNumber = $x;
        $this->balance = $y;
    }
	public function __destruct(){
		echo "lobjet es {$this->accountNumber}.,.{$this->balance}.";
		
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

	public function deposit($argent){
		if ($argent>0 ){
			var_dump($this->setbalance($this->balance+$argent));
		}
		else{
			echo "veuillez entre une somme superieur à 0";
		}
	}

	public function withdraw($somme){


		if($this->balance>$somme){
		var_dump($this->setbalance($this->balance-$somme));
		}
		else{
			echo "votre solde est insuffisant pour effecter 
			cette operatio";
		}
	}

	public function transfer($objet1,int $montant){
		$this-> withdraw($montant);
		$objet1->deposit($montant);
		


    }

public function addInterest($interet){
        $this-> setinterestRate($interet);
       return $this->setbalance($this-> getbalance()+($this-> getbalance()*($this->getInterestRate()/100)));

    }
}