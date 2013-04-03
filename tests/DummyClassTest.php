<?php

include '../classes/DummyClass.php';

class DummyClassTest extends PHPUnit_Framework_TestCase
{
    public function testCreateClass()
    {
        $objDummyClass = new DummyClass(array());
        
        $this->assertTrue($objDummyClass instanceof DummyClass);
    }
    
    public function testCreateClassFail()
    {
        try
        {
            $objDummyClass = new DummyClass('wrong param');
        }
        catch(InvalidArgumentException $objEx)
        {
            return;
        }
        
        $this->fail('Should not get to this.');
    }
    
    public function testGetArray()
    {
        $arrDummyData = array(1, 2, 3);
        
        $objDummyClass = new DummyClass($arrDummyData);
        
        $this->assertEquals($arrDummyData, $objDummyClass->getSomeArr());
    }
    
    public function testGetSize()
    {
        $arrDummyData = array(1, 2, 3);
        
        $objDummyClass = new DummyClass($arrDummyData);
        
        $this->assertEquals(3, $objDummyClass->getSize());
    }
}

?>