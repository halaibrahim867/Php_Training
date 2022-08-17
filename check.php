<?php
require 'App\bank.php';
use \http\Exception\InvalidArgumentException;
class CheckingAccount extends BankAccount{

private  $minBalance;

public function __construct($amount,$minBalance)
{
    if($amount > 0 && $amount >= $minBalance){
        parent::__construct($amount);
        $this->minBalance =$minBalance;
    } else {
        throw new InvalidArgumentException('amount must be more than zero and higer than min');
    }

}

public function withdraw($amount)
{
   $canwithdraw = $amount > 0 && ($this->getBalance()- $amount ) >= $this->minBalance;

   if($canwithdraw){
       parent::withdraw($amount);
       return true;
   }
   return false;
}


}


$account = new CheckingAccount(10000,4000);
echo $account->getBalance();

$account->withdraw(2000);
echo $account->getBalance();

