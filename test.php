<?php

class Test{

    //overridden method
    public function greet(){
        return 'hello';
    }
}

class Test2 extends Test{

    //over ridding method
    public function greet(){
        return 'hi';
    }
}
$test = new Test();
echo $test->greet();

$test2 = new Test2();
echo $test2->greet();