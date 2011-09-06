<?php
 
class LaidbackObject {

  public function findPublicAttributesByAnnotation(){
    $reflect = new ReflectionClass($this);
    $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);
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

}
