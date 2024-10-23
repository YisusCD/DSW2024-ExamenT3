<?php
namespace Dsw\T3;

class RangeQuestion extends AbstractQuestion {
  public $min;
  public $max;

  public function __construct($name, $min, $max)
  {
    parent::__construct($name);
    $this->min = $min;
    $this->max = $max;
  }
}