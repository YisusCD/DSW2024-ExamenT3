<?php
namespace Dsw\T3;

class Text extends AbstractStatement implements DisplayableInterface {
  private $type;

  public function __construct($text, $type = 0)
  {
    parent::__construct($text);
    $this->type = $type;
  }

  public function render(): string
  {
    switch ($this->type) {
      case 0:
        return '<p>' . $this->text . '</p>'; 
      case 1:
        return '<h1>' . $this->text . '</h1>';
      case 2:
        return '<h2>' . $this->text . '</h2>';
      case 3:
        return '<h3>' . $this->text . '</h3>';
      case 4:
        return '<h4>' . $this->text . '</h4>';
      case 5:
        return '<h5>' . $this->text . '</h5>';
      case 6:
        return '<h6>' . $this->text . '</h6>';
      default:
        return '<p>' . $this->text . '</p>';
    }

  if ($this->type < 0) {
    return '<p>' . $this->text . '</p>';
  } else if ($this->type > 7) {
    return '<p>' . $this->text . '</p>';
  }
  }
}