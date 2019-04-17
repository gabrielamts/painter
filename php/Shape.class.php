<?php 

class Shape {
  public $_x;       
  public $_y; 
  public $_color;
  public $_opacity;       

	function __construct($_x,$_y,$_color,$_opacity) {
    	$this->_x = $_x;
    	$this->_y = $_y;
    	$this->_color = $_color;
    	$this->_opacity = $_opacity;
}
}

?>