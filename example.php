<?php

declare(strict_types=1);

/**
 * @param float|int $a
 * @param float|int $b
 *
 * @return float|int
 */
function sum($a, $b)
{
    return $a + $b;
}

/**
 * @template T
 */
class Data
{
    /**
     * @var T
     */
    private $data;

    /**
     * @param T $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return T
     */
    public function getData()
    {
        return $this->data;
    }
}

/** @var Data<string> */
$data = new Data('Hello World');

echo $data->getData();
