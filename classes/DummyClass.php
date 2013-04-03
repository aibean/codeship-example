<?php

/**
 * Written in c9.io
 * This is just a Dummy class to test Codeship.oi
 */
 
 class DummyClass
 {
    /**
     * @var Array 
     */
    private $arrSomeArr;
     
    public function __construct(Array $arrSomeArr)
    {
       $this->arrSomeArr = $arrSomeArr; 
    }
    
    public function getSomeArr()
    {
        return $this->arrSomeArr;
    }
    
    public function getSize()
    {
        return count($this->arrSomeArr);
    }
 }

?>