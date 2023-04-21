<?php 

require_once 'Speed.php';


class Bus implements Speed
{
	public $speed;

    public function __construct($speed)
    {

    	$this->speed = $speed;
    }

    public function __toString()
    {
        return $this->setSpeed();
    }
 
    public function setSpeed(){

    	return get_class().': '.$this->speed;
    }
}