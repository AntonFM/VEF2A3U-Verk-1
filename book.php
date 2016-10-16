<?php

// Define the Book class.
class Bok
{
    // Declare properties.
    var $titill;
    var $verd;
    
    // Declare a method.
    function summary()
    {
        echo 'Titill: '      . $this->titill       . PHP_EOL;
        echo 'Verd: '     . $this->verd. "<br>"       . PHP_EOL;
        
    }

    function getPrice()
    {
        return $this->setPrice();
    }

    function setPrice()
    {
        return "1500kr."();
    }

    function getTitle()
    {
        return $this->setTitle();
    }

    function setTitle()
    {
        return "Hobbit"();
    }

   

    
}

    $efnafraedi = new Bok;
    $staerdfraedi = new Bok;
    $islenska = new Bok;

    $efnafraedi->titill        = 'Efnafræði 101';
    $efnafraedi->verd       = '2500kr.';

    $staerdfraedi->titill        = 'Stæ 303';
    $staerdfraedi->verd       = '25.000kr.';

    $islenska->titill        = 'Ljóðamál';
    $islenska->verd       = 'Hamingjuna þína';

    $efnafraedi->summary();
    $staerdfraedi->summary();
    $islenska->summary();
