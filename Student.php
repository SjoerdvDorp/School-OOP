<?php

namespace Opdracht5;

class Student extends Person
{
    private $paid;
    private $className;

    public function __construct($firstname, $lastname, $className, $paid = '0 (niet betaald)')
    {
        parent::__construct($firstname, $lastname);
        $this->className = $className;
        $this->paid = $paid;

    }

    public function getPayment()
    {
        return $this->paid;
    }

    public function getGroup()
    {
        return $this->className;
    }
}