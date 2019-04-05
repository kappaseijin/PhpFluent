<?php
/**
 * Example uses for Fluent.
 */
include_once './Fluent.php';

class Main
{
    public function test()
    {
        // for display
        $print = function ($item) {
            echo var_export($item, true) . PHP_EOL;
        };

        echo str_pad('', 80, '-') . PHP_EOL;
        echo 'look like each.' . PHP_EOL;
        $r = range(0, 9);
        (new Fluent($r))
            ->__each($print);

        echo str_pad('', 80, '-') . PHP_EOL;
        echo 'wrap with array.' . PHP_EOL;
        (new Fluent(1))
            ->__wrapArray()
            ->__each($print);

        echo str_pad('', 80, '-') . PHP_EOL;
        echo "Call context's method." . PHP_EOL;
        $obj = new Main();
        (new Fluent($obj))
            ->setNumber(5)
            ->getNumber()
            ->__wrapArray()
            ->__each($print);
    }

    private $number = 10;

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}

(new Main())->test();
