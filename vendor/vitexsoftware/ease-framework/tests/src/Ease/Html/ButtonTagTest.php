<?php

namespace Test\Ease\Html;

use Ease\Html\ButtonTag;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:17.
 */
class ButtonTagTest extends PairTagTest
{
    /**
     * @var ButtonTag
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\Html\ButtonTag('Test');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Ease\Html\ButtonTag::draw
     */
    public function testDraw($whatWant = null)
    {
        if (is_null($whatWant)) {
            $whatWant = '
<button>Test</button>';
        }
        parent::testDraw($whatWant);
    }
}
