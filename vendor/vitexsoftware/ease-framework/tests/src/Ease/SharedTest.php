<?php

namespace Test\Ease;

use Ease\Shared;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:58:11.
 */
class SharedTest extends AtomTest
{
    /**
     * @var Shared
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = \Ease\Shared::instanced();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Ease\Shared::singleton
     */
    public function testSingleton()
    {
        $this->assertInstanceOf('\Ease\Shared', \Ease\Shared::singleton());
    }

    /**
     * @covers Ease\Shared::instanced
     */
    public function testInstanced()
    {
        $this->assertInstanceOf('\Ease\Shared', \Ease\Shared::instanced());
    }

    /**
     * @covers Ease\Shared::setConfigValue
     * @covers Ease\Shared::getConfigValue
     */
    public function testSetConfigValue()
    {
        $this->object->setConfigValue('test', true);
        $this->assertTrue($this->object->getConfigValue('test'));
    }

    /**
     * @covers Ease\Shared::db
     */
    public function testDb()
    {
        $this->assertInstanceOf('\Ease\SQL\PDO', \Ease\Shared::db());
    }

    /**
     * @covers Ease\Shared::logger
     */
    public function testLogger()
    {
        $this->assertInstanceOf('\Ease\Logger\Regent', \Ease\Shared::logger());
    }

    /**
     * @covers Ease\Shared::webPage
     */
    public function testWebPage()
    {
        $this->assertInstanceOf('\Ease\WebPage', \Ease\Shared::webPage());
    }

    /**
     * @covers Ease\Shared::user
     */
    public function testUser()
    {
        $this->assertInstanceOf('\Ease\Anonym', \Ease\Shared::user());
        $this->assertInstanceOf('\Ease\User',
            \Ease\Shared::user(new \Ease\User()));
        $this->assertInstanceOf('\Ease\User', \Ease\Shared::user());
    }

    /**
     * @covers Ease\Shared::loadConfig
     * @expectedException Ease\Exception
     */
    public function testLoadConfig()
    {
        $this->object->loadConfig('src/configtest.json');
        $this->assertArrayHasKey('opt', $this->object->configuration);
        $this->assertTrue(defined('KEY'));
        $this->object->loadConfig('unexistent.json');
        $this->assertEquals('optvalue', $this->object->getConfigValue('opt'));
        $this->assertEquals('keyvalue', $this->object->getConfigValue('KEY'));
    }

    /**
     * @covers Ease\Shared::isCli
     */
    public function testIsCli()
    {
        $this->assertTrue($this->object->isCli());
    }

    /**
     * @covers Ease\Shared::registerItem
     */
    public function testRegisterItem()
    {
        $item = new \Ease\Html\ATag('#');
        \Ease\Shared::registerItem($item);
        $this->assertInstanceOf(get_class($item), end($this->object->allItems));
    }

}