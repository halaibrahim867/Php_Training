<?php


require "SavingAccount.php";

$account = new SavingAccount(.06);
$account->deposit(100);
echo $account->getBalance();


