<?php

namespace laidback;

interface IDataSaver {

  public function persist(LaidbackObject $obj);

}
