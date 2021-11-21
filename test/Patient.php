<?php
class Patient
{
    public $name;
    public $code;

    /**
     * @param $name
     * @param $code
     */
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
    function showInfo()
    {
        return 'Name: '.$this->name.' Code: '.$this->code;
    }
}