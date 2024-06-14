<?php


  class BankAccount{
	public $accountNumber;
	public $balance;
	
	public function __construct(int $x, int $y){
        $this->accountNumber = $x;
        $this->balance = $y;
    }
	
        

		public function __get(String $name){
		
				echo "$name est innaccessible" ;
			}
				
			public function __set(string $name,$values){
				
				echo  "Setting '$name' to '$values' n'est  pas accessible\n";
			}
			

			public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }
			
		
	public function getAccountNumber(){
		return $this->accountNumber;
	}
	private function setAccountNumber($num){
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
	public function withdraw($somme){


		if($this->balance>$somme){
		var_dump($this->setbalance($this->balance-$somme));
		}
		else{
			echo "votre solde est insuffisant pour effecter 
			cette operatio";
		}
	}

	
}





