<?php

require_once("LaidbackTestObject.php");


class TestLaidbackObject extends PHPUnit_Framework_TestCase{

  protected $obj;

  protected function setUp() {
    $this->obj = new LaidbackTestObject();
  }

  protected function tearDown() {
    unset($this->obj);
  }

  public function testCreationOfObject(){
    $this->assertNotNull($this->obj);
  }

  public function testSetterAndGetter(){
    $this->obj->setTeststring("test");
    $this->assertEquals("test", $this->obj->getTeststring());
  }




}
