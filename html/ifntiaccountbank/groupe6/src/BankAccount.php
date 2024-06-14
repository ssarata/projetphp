<?php
 class BankAccount {
	
	/*public $accountNumber;
	public $balance;
	*/
	private $accountNumber;
	private $balance;
	private static $numberOfAccounts=0;
	private static $totalBalance=0;
	
	public function __construct(int $x, int $y){
        $this->accountNumber = $x;
        $this->balance = $y;
		self::$numberOfAccounts+=1;
		self::$totalBalance+=$y;
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

	public static function getnumberOfAccounts(){
		return self::$numberOfAccounts;
	}
	public static function gettotalBalance(){
		return self::$totalBalance;
	}


	/*public function setnumberOfAccounts($num){
		return $this->numberOfAccounts=$num;
	}

	
	public function settotalBalance($num){
		return $this->totalBalance=$num;
	}
	*/
	
}