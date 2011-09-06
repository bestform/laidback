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

  public function testFindPublicAttributesByAnnotation(){
    $vars = $this->obj->findPublicAttributesByAnnotation();
    $this->assertEquals(array("teststring" => null), $vars);
  }

  public function testReadCorrectValuesFromAnnotatedProps(){
    $this->obj->teststring = "hoppeldibopp";
    $vars = $this->obj->findPublicAttributesByAnnotation();
    $this->assertEquals(array("teststring" => "hoppeldibopp"), $vars);
  }




}
