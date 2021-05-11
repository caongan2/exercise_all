<?php

namespace App;

class Calculator
{
    function add($number1, $number2)
    {
        return $number1 + $number2;
    }

    function minus($number1, $number2)
    {
        return $number1 - $number2;
    }

    function multiply($number1, $number2){
        return $number1 * $number2;
    }
    function division($number1, $number2) {
        return $number1 / $number2;
    }

    function calculator($operator, $number1, $number2)
    {
        $result = 0;
        switch ($operator) {
            case 'plus':
                $result = $this->add($number1, $number2);
                break;
            case 'minus':
                $result = $this->minus($number1, $number2);
                break;
            case 'multiply':
                $result = $this->multiply($number1, $number2);
                break;
            case 'division':
                try {
                    if ($number2 != 0) {
                        $result = $this->division($number1, $number2);

                    }else {
                        throw new \Exception("phep chia khong hop le");
                    }
                }catch (\Exception $exception){
                   echo $exception->getMessage();
                }
                break;

        }
        return $result;
    }
}