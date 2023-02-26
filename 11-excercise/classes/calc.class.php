<?php

class Calc{
    // properties
    public $operator;
    public $num1;
    public $num2;

    // method
    public function __construct(string $operator, int $numOne, int $numTwo){
        $this->operator = $operator;
        $this->num1 = $numOne;
        $this->num2 = $numTwo;
    }

    public function calculator()
    {
        switch ($this->operator)
        {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;

            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;

            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;

            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo "Error";
                break;
        }
    }
}