<?php
// OOP tests, demo, and example

/// Class:
class BankAccount
{
    public $accountNumber;
    public $balance = 0;

    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}


/// Objects:
$my_account = new BankAccount();
$your_account = new BankAccount();

$my_account->accountNumber = 1;
$your_account->accountNumber = 2;

$my_account->deposit(400);
$your_account->deposit(1000);

$my_account->deposit(200);

$withdraw_success = $my_account->withdraw(50000);

if($withdraw_success){
    echo "Withdraw worked";
}
else{
    echo "Withdraw failed";
}

var_dump($my_account, $your_account);