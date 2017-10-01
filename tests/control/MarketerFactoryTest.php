<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-09-02 at 00:46:49.
 */
require_once '../control/MarketerFactory.php';
require_once '../model/Marketer.php';
class MarketerFactoryTest extends PHPUnit_Framework_TestCase {

    /**
     * @var MarketerFactory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new MarketerFactory("catiane","1234");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MarketerFactory::LoadUser
     * @todo   Implement testLoadUser().
     */
    public function testLoadUser() {
        // Remove the following lines when you implement this test.
         $this->assertEquals(array(),  $this->object->LoadUser());
    }

}
