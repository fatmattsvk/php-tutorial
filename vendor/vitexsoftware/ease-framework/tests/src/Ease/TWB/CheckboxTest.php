<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:39.
 */
class CheckboxTest extends \Test\Ease\Html\DivTagTest
{
    /**
     * @var Checkbox
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\Checkbox('CheckBox');
    }

    public function testConstructor()
    {
        $classname = get_class($this->object);

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $mock->__construct('Test');

        $mock->__construct('checktest', 'true', 'Test CheckBOX', true,
            ['title' => 'test']);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Ease\TWB\Checkbox::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<div>
<label for="CheckBox">
<input type="checkbox" value="on" name="CheckBox" /></label></div>');
    }
}
