<?php

//Programme principal
class Cercle extends Shape{

  public function dessinerCercle () {
    echo '<circle cx="'.$this->_x.'" cy="'.$this->_y.'" r="30" fill="'.$this->_color.'" opacity="'.$this->_opacity.'"/>';
  } 
}


