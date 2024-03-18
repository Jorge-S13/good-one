<?php

namespace App\Services;

class Shirt extends Product
{
    public function __construct(float|int $fabricCount, float|int $threadCount, private int $buttonCount)
    {
        parent::__construct($fabricCount, $threadCount);
    }
    /**
     * @return int
     */
    public function getButtonCount(): int
    {
        return $this->buttonCount;
    }

    public function buttonCalculation(): int
    {
        return $this->buttonCount * $this->countOfProduct;
    }
}
