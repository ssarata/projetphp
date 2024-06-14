<?php


  class BankAccount {
	public $accountNumber;
	public $balance;
	
	public function __construct(int $x, int $y){
        $this->accountNumber = $x;
        $this->balance = $y;
    }
	
        /*$this->accountNumber = $x;
        $this->balance = $y;*/
    

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
	public function deposit($argent){
		if ($argent>0 ){
			var_dump($this->setbalance($this->balance+$argent));
		}
		else{
			echo "veuillez entre une somme superieur à 0";
		}
	}
	public function withdraw($somme) {
		try{
			if($this->balance<$somme){
			throw new Exception("votre solde est insuffisant pour effecter 
			cette operation");
			}
			else{
				var_dump($this->setbalance($this->balance-$somme));

			}
			
			
			
		}
		catch(Exception $e){
			echo  $e->getMessage();
		}

		
	}

	
}






