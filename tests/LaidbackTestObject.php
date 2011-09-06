<?php

require_once("../src/LaidbackObject.php");

class LaidbackTestObject extends LaidbackObject{

  /**
   * @persist
   */
  public $teststring;
  
  public $dontpersistme;

}
