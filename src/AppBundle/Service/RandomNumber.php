<?php

namespace AppBundle\Service;

class RandomNumber
{
    protected $max;

    public function __construct()
    {
        $this->max = 0xffff;
    }
    
	public function genera()
    {
        return random_int(1, $this->max);
    }
}