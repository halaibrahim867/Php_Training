<?php


class  Toaster
{
    protected array $slices ;
    protected int $size;

    public function __construct()
    {
        $this->slices = [];
        $this->size =2;

    }

    public function addSlice(string $slices) :void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slices;
        }
    }


    public function toast()
    {
        foreach ($this->slices as $z => $slice) {
            echo ($z + 1) . 'toast'. $slice . PHP_EOL;
        }
    }
}

$toast = new Toaster();
$toast->addSlice(1);
$toast->addSlice(1);
$toast->addSlice(1);

$toast->toast();
















