<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:42.
 */
class ButtonDropdownTest extends \Test\Ease\Html\DivTagTest
{
    /**
     * @var ButtonDropdown
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\ButtonDropdown();
    }

    public function testConstructor()
    {
        $classname = get_class($this->object);

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $mock->__construct('Test');

        $mock->__construct('Tag', 'success', 10, ['a.html' => 'A'],
            ['title' => 'dropdown']);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Ease\TWB\ButtonDropdown::addMenuItem
     *
     * @todo   Implement testAddMenuItem().
     */
    public function testAddMenuItem()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\ButtonDropdown::divider
     *
     * @todo   Implement testDivider().
     */
    public function testDivider()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\Html\InputTag::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<div class="btn-group">
<button class="btn btn-default  dropdown-toggle" type="button" data-toggle="dropdown"> <span class="caret"></span></button>
<ul class="dropdown-menu" role="menu"></ul></div>');
    }
}
