<?php
require 'App\bank.php';

class SavingAccount extends BankAccount{

    private $rate;

    public function  __construct($rate,$balance)
    {
        parent:: __construct($balance);
       $this->rate =$rate;
    }

    public function setRate($rate){
        $this->rate = $rate;
    }
    public function addInterest(){
        $inerest = $this>$this->rate * $this->getBalance();
        $this->deposit($inerest);
    }


}