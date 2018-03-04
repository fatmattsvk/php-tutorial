<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-10-23 at 14:07:12.
 */
class CarouselTest extends \Test\Ease\Html\DivTagTest
{
    /**
     * @var Carousel
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\TWB\Carousel();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Ease\TWB\Carousel::addSlide
     * @todo   Implement testAddSlide().
     */
    public function testAddSlide()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\TWB\Carousel::finalize
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
     * @covers Ease\TWB\Carousel::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw('
<div id="'.$this->object->getTagId().'" class="carousel slide">
<ol class="carousel-indicators"></ol>
<div class="carousel-inner" role="listbox"></div></div>');
    }
}