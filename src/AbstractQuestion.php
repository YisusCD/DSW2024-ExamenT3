<?php
namespace Dsw\T3;

abstract class AbstractQuestion extends AbstractStatement implements DisplayableInterface {
  public $name;
  public $statements; 
  
  public function __construct($name, $statements, $text = "")
  {
    parent::__construct($text);
    $this->name = $name;
    $this->statements = $statements;
  }

  public function addStatement () {

  }

  public function getStatement () {

  }

  public function renderStatements () {

  }

  public function render() {
    
  }
}