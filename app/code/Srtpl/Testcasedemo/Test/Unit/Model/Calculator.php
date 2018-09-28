<?php

namespace Srtpl\Testcasedemo\Test\Unit\Model;

class Calculator extends  \PHPUnit\Framework\TestCase {

    protected $_objectManager;
    protected $_desiredResult;
    protected $_actulResult;
    protected $_desiredResult1;
    protected $_actulResult1;
    protected $_calculator;
    /**
     * unset the variables and objects after use
     *
     * @return void
     */
    public function tearDown() {

    }

    /**
     * used to set the values to variables or objects.
     *
     * @return void
     */
    public function setUp() {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_calculator = $this->_objectManager->getObject("Srtpl\Testcasedemo\Model\Calculator");
        //can do stuff
    }
    /**
     * this function will perform the addition of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function testAddition() {
         $this->_actulResult = $this->_calculator->addition(7.0,3.0);
         $this->_desiredResult = 10.0;
         $this->assertEquals($this->_desiredResult, $this->_actulResult);
    }

    public function testSubstract() {
         $this->_actulResult1 = $this->_calculator->substract(7.0,3.0);
         $this->_desiredResult1 = 4.0;
         $this->assertEquals($this->_desiredResult1, $this->_actulResult1);
    }
}