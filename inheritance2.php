<!DOCTYPE html>
<html>
<head>
	<title>inheritance</title>
</head>
<body>
	<div style="text-align: center;">
		<h1 style="text-align: center;color:red;font-size: 20px">Inheritance with constructor and call parent constructor in child class</h1>
		<a href="/php(oop-practice)/constructor-with-class.php">
		  <button>P-1</button>
		</a> 
		<a href="/php(oop-practice)/p1.php">
		  <button>P-2</button>
		</a>
    <a href="/php(oop-practice)/p3.php">
		  <button>P-3</button>
		</a> <br><br>

    <!-- inheritance -->
    <?php
      
      class BankAccount
      {
          private $balance;

          public function __construct($balance)
          { 
            $this->balance = $balance;
          }

          public function getBalance()
          {
              return $this->balance;
          }

          public function deposit($amount)
          {
            if($amount > 0) {
              $this->balance += $amount;
            } else {
               echo "Amount must be greter than 0";
            }

            // return $this;
          }

          public function showCurrentBalance()
          {
             echo "Bank account current balance is: {$this->balance}";
          }
      }

      class SavingAccount extends BankAccount
      {
          private $interestRate;

          public function __construct($balance,$interestRate)
          { 
            parent::__construct($balance);
            $this->interestRate = $interestRate;
          }

            // public function setInterestRate($interestRate)
            // {   
            //     $this->interestRate = $interestRate;
            // }

          public function addInterestWithMainBalance()
          {   
              // $interest = $this->getBalance() * $this->interestRate;
              $interest = $this->getBalance() * $this->interestRate;
              $this->deposit($interest);
          }
      }

      $account = new SavingAccount(200, 0.5);
      // $account->deposit(200);
      // $account->setInterestRate(0.05);
      $account->addInterestWithMainBalance();
      $account->showCurrentBalance();
    ?>

	</div>

	</body>
</html>