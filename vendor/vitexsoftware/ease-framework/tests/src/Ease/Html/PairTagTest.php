<?php

namespace Test\Ease\Html;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:15.
 */
class PairTagTest extends TagTest
{
    /**
     * @var PairTag
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Ease\Html\PairTag();
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

        $mock->__construct('PairTag', ['name' => 'Tag', 'id' => 'testing']);
        $mock->__construct('PairTag', ['name' => 'Tag', 'id' => 'testing'],
            'Initial Content');
    }

    /**
     * @covers Ease\Html\PairTag::draw
     */
    public function testDraw($whatWant = null)
    {
        $tagType = $this->object->getTagType();
        if (!strlen($tagType)) {
            $tagType = 'test';
            $this->object->setTagType($tagType);
        }
        if (is_null($whatWant)) {
            if (count($this->object->tagProperties)) {
                $whatWant = "\n<$tagType ".$this->object->tagPropertiesToString()."></$tagType>";
            } else {
                $whatWant = "\n<$tagType></$tagType>";
            }
        }
        ob_start();
        $this->object->draw();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($whatWant, $drawed);
    }

    /**
     * @covers Ease\Html\PairTag::tagBegin
     */
    public function testTagBegin($tagBegin = null)
    {
        $tagType = $this->object->getTagType();
        if (!strlen($tagType)) {
            $tagType = 'test';
            $this->object->setTagType($tagType);
        }

        if (count($this->object->tagProperties)) {
            $tagBegin = "\n<".trim($tagType.' '.$this->object->tagPropertiesToString()).'>';
        } else {
            $tagBegin = "\n<$tagType>";
        }
        ob_start();
        $this->object->tagBegin();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($tagBegin, $drawed);
    }

    /**
     * @covers Ease\Html\PairTag::tagEnclousure
     */
    public function testTagEnclousure()
    {
        $tagType = $this->object->getTagType();
        if (!strlen($tagType)) {
            $tagType = 'test';
            $this->object->setTagType($tagType);
        }
        ob_start();
        $this->object->tagEnclousure();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals("</$tagType>", $drawed);
    }
}
