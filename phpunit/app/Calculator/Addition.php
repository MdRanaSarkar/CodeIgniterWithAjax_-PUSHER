<?php

namespace App\Calculator;

class Addition
{


    protected $operants;

    public function setOperands(array $operants){

        $this->operants=$operants;

    }
    public function calculate(){
        return array_sum($this->operants);
    }
}