<!DOCTYPE html>
<html>
<head>
	<title>Practice 3</title>
</head>
<body>
	<div style="text-align: center;">
		<h1 style="text-align: center;color:red;font-size: 20px">Access public and private method and properties from class</h1>
		<a href="/php(oop-practice)/constructor-with-class.php">
		  <button>P-1</button>
		</a> 
		<a href="/php(oop-practice)/p1.php">
		  <button>P-2</button>
		</a> <br><br>

		<strong>Using public keyword</strong><br><br>

		<?php
			/**
			 * 
			 */
			class Account
			{
				public $accountBalance;

				function __construct($initialBalance = 0)
				{
					$this->accountBalance = $initialBalance;
				}

				public function addAmount($taka)
				{
					$this->accountBalance += $taka;
				}

				public function detuctAmount($taka)
				{
					$this->accountBalance -+ $taka;
				}

				public function showCurrentBalance()
				{   
					echo "Total balance is {$this->accountBalance}";
				}
			}

			$accountObj = new Account(100);
			echo "Before add new amount".'<br>';
			$accountObj->showCurrentBalance();
			echo '<br>'.'<br>';
			echo "After add new amount".'<br>';
			$accountObj->addAmount(20);
			$accountObj->showCurrentBalance();
		?>

		<br><br>
		<strong>Using private keyword</strong><br><br>

		<?php
			/**
			 * 
			 */
			class BankAccount
			{
				private $accountBalance;

				// ser balance
				public function setAccountBalance($balance = 0)
				{	
					$this->accountBalance = $balance;
				}

				private function addAmount($taka)
				{
					$this->accountBalance += $taka;
				}

				private function detuctAmount($taka)
				{
					$this->accountBalance -= $taka;
				}

				public function action ($taka) 
				{
					$this->detuctAmount($taka);
				}

				

				public function showCurrentBalance()
				{   
					echo "Total balance is {$this->accountBalance}";
				}
			}

			$accountObj = new BankAccount();
			$accountObj->setAccountBalance(200);

			echo "Before add new amount".'<br>';
			$accountObj->showCurrentBalance();

			echo '<br>'.'<br>';
			echo "After add new amount".'<br>';
			$accountObj->action(20);

			// get balance
			$accountObj->showCurrentBalance();
		?>

	</div>

	</body>
</html>