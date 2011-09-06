<?php
namespace laidbacktests;

use laidback\LaidbackObject;

class LaidbackTestObject extends LaidbackObject{

  /**
   * @persist
   */
  public $teststring;
  
  public $dontpersistme;

}
