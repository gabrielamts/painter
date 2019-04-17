

<?php

//Programme principal
class Triangle{
  private $_points;      
  private $_color;
  private $_opacity;


	public function __construct($_points,$_color,$_opacity) {
    	$this->_points = $_points;
    	$this->_color = $_color;
    	$this->_opacity = $_opacity;
    	
   
	}

	public function dessinerTriangle () {
		echo '<polygon points="'.$this->_points.'"fill="'.$this->_color.'"opacity="'.$this->_opacity.'"/>';
	}	
}

	



