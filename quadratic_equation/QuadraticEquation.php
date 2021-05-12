<?php


class QuadraticEquation
{
    public float $a;
    public float $b;
    public float $c;
    public float $delta;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta = pow($this->b,2) - (4 * $this->a * $this->c);
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $c
     */
    public function setC(float $c): void
    {
        $this->c = $c;
    }

    /**
     * @return float
     */
    public function getDelta(): float
    {
        return $this->delta;
    }

    public function getRoot(): float
    {

           return (-$this->b - sqrt($this->delta)) / 2;
    }

    public function getRoot2(): float
    {
        return (-$this->b + sqrt($this->delta)) / 2;

    }


}