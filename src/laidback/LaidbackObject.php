<?php

namespace laidback;


class LaidbackObject {

  protected $dataSaver;

  public function setDataSaver(IDataSaver $dataSaver){
    $this->dataSaver = $dataSaver;
  }

  public function findPublicAttributesByAnnotation(){
    $reflect = new \ReflectionClass($this);
    $props = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
    $ret = array();
    foreach($props as $prop) {
      if($this->hasPersistAnnotation($prop)){
        $ret[$prop->getName()] = $prop->getValue($this);
      }
    }
    return $ret;
  }

  protected function hasPersistAnnotation($prop){
    $docComment = $prop->getDocComment();
    return preg_match("/@persist/m", $docComment) == 1;
  }

  /**
   * @return void
   * @throws NoDataSaverException
   */
  public function persist(){
    if($this->dataSaver === null){
      throw new NoDataSaverException();
    }
    $this->dataSaver->persist($this);
  }

}
