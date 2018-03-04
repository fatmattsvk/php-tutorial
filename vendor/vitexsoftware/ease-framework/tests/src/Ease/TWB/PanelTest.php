<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:51.
 */
class PanelTest extends \Test\Ease\Html\DivTagTest
{
    /**
     * @var Panel
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\Panel();
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
        $mock->__construct('Test');

        $mock->__construct('PanelTest', 'danger', 'body', 'footer',
            ['title' => 'test']);
    }

    /**
     * @covers Ease\TWB\Panel::addItem
     *
     * @todo   Implement testAddItem().
     */
    public function testAddItem()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\Panel::finalize
     *
     * @todo   Implement testFinalize().
     */
    public function testFinalize()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\Panel::footer
     *
     * @todo   Implement testFooter().
     */
    public function testFooter()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\Panel::getItemsCount
     */
    public function testGetItemsCount()
    {
        $this->object->emptyContents();
        $this->assertEquals(0, $this->object->getItemsCount());
        $this->object->addItem('@');
        $this->assertEquals(0, $this->object->getItemsCount());
        $this->assertEquals(2,
            $this->object->getItemsCount(new \Ease\Html\Div(['a', 'b'])));
    }

    /**
     * @covers Ease\TWB\Panel::isEmpty
     */
    public function testIsEmpty()
    {
        $this->object->emptyContents();
        $this->assertTrue($this->object->isEmpty());
        $this->object->addItem('@');
        $this->assertFalse($this->object->isEmpty($this->object->body));
    }

    /**
     * @covers Ease\TWB\Panel::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<div class="panel panel-default">
<div class="panel-body"></div></div>');
    }
}