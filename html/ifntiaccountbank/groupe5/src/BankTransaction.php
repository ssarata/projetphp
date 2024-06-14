<?php
trait BankTransaction{
	
	public function deposit($argent){
		if ($argent>0 ){
			return $this->setbalance($this->balance+$argent);
		}
		else{
			echo "veuillez entre une somme superieur à 0";
		}
	}

	public function withdraw($somme){


		if($this->balance>$somme){
		return $this->setbalance($this->balance-$somme);
		}
		else{
			echo "votre solde est insuffisant pour effecter 
			cette operatio";
		}
	}

}
