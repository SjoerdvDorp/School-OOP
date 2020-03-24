<?php

namespace Opdracht5;

class Schooltrip
{
    private $name;
    private $tripList = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addSchooltripList($schooltripList)
    {
        $this->tripList[] = $schooltripList;
    }

    public function getSchooltrip()
    {
        $print = '';
        $listNumber = 0;

        foreach ($this->tripList as $schooltripList)
        {
            $listNumber++;

            $print = $schooltripList->getSchooltripList();
        }

        return '<strong>'.$this->name.'</strong>'.$print;
    }
}