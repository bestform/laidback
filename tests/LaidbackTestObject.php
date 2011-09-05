<?php

require_once("../src/LaidbackObject.php");

class LaidbackTestObject extends LaidbackObject{

  /*
   * @persist
   */
  private $teststring;

  public function setTeststring($newValue){
    $this->teststring = $newValue;
  }

  public function getTeststring(){
    return $this->teststring;
  }
}
