<?php

require_once './Person.php';

class Student extends Person
{
    public int $stId;
    public function __construct($name, $age, $stId)
    {
        $this->stId = $stId;
        parent::__construct($name, $age, null);
    }
}
