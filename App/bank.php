<?php

class BankAccount{
    private $balance;


    public function __construct($amount)
    {

        $this->balance = $amount;
    }


    public function getBalance()
    {
        return $this->balance;
    }
    public function deposit ($amount){
        if ($amount > 0){
            $this->balance += $amount;
        }
        return $this;
    }

    public final function withdraw($amount){
        if($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }


}
