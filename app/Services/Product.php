<?php

namespace App\Services;

class Product
{
    protected int $countOfProduct = 1;
    public function __construct(protected float|int $fabricCount, protected float|int $threadCount)
    {
    }

    /**
     * @param int $countOfProduct
     */
    public function setCountOfProduct(int $countOfProduct): void
    {
        $this->countOfProduct = $countOfProduct;
    }

    /**
     * @return int
     */
    public function getCountOfProduct(): int
    {
        return $this->countOfProduct;
    }
    /**
     * @return float|int
     */
    public function getFabricCount(): float|int
    {
        return $this->fabricCount;
    }

    /**
     * @return float|int
     */
    public function getThreadCount(): float|int
    {
        return $this->threadCount;
    }

    public function fabricCalculation(): float|int
    {
        return $this->fabricCount * $this->countOfProduct;
    }

    public function threadCalculation(): float|int
    {
        return $this->threadCount * $this->countOfProduct;
    }
}
