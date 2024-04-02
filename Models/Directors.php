<?php

class Director
{
    public $directorName;
    public $directorLastname;
    public $directorNationality;

    function __construct($_directorName, $_directorLastname, $_directorNationality)
    {
        $this->directorName = $_directorName;
        $this->directorLastname = $_directorLastname;
        $this->directorNationality = $_directorNationality;
    }

    public function getDirector()
    {
        return "Director Name: " . $this->directorName . " " . $this->directorLastname . " <br> " . "Nationality: " . $this->directorNationality;
    }
}
