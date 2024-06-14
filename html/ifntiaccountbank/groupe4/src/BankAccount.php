

<?php


  interface BankAccount{
	public function getbalance();
	

	
	public function getAccountNumber();

	public function setAccountNumber($num);

	
	public function setbalance($num);
	
	public function deposit($argent);
	public function withdraw($somme);
  }




