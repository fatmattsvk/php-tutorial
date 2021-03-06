<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:30.
 */
class LinkButtonTest extends \Test\Ease\Html\ATagTest
{
    /**
     * @var LinkButton
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\LinkButton('http://v.s.cz/', 'test');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $classname = get_class($this->object);

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $mock->__construct("http://vitexsoftware.cz/");
    }

    /**
     * @covers Ease\TWB\LinkButton::tagPropertiesToString
     */
    public function testTagPropertiesToString()
    {
        $this->object->setTagProperties(['id' => 'Test', 'name' => 'unit']);
        $this->assertEquals('class="btn btn-default" href="http://v.s.cz/" id="Test" name="unit"',
            $this->object->tagPropertiesToString());
    }

    /**
     * @covers Ease\TWB\LinkButton::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<a class="btn btn-default" href="http://v.s.cz/">test</a>');
    }
}