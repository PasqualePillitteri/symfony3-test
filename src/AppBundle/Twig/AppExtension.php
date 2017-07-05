<?php

namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('stampaOra', [$this, 'generaOra']),
        );
    }
    
      	public function generaOra()
    {
        return date('d/m/Y H:i:s');
    }
    
}