<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:32.
 */
class ListGroupTest extends \Test\Ease\Html\UlTagTest
{
    /**
     * @var ListGroup
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\ListGroup();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Ease\TWB\ListGroup::addItemSmart
     *
     * @todo   Implement testAddItemSmart().
     */
    public function testAddItemSmart()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\ListGroup::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<ul class="list-group"></ul>');
    }
}
