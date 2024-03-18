<?php

namespace App\Services;

class Pants extends Product
{
    public function __construct(float|int $fabricCount, float|int $threadCount, private int $zipperCount)
    {
        parent::__construct($fabricCount, $threadCount);
    }
    /**
     * @return int
     */
    public function getZipperCount(): int
    {
        return $this->zipperCount;
    }

    public function zipperCalculation(): int
    {
        return $this->zipperCount * $this->countOfProduct;
    }
}
