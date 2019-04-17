<?php

//Programme principal
class Rectangle extends Shape{

	public function dessinerRectangle () {
		echo '<rect x="'.$this->_x.'" y="'.$this->_y.'" width="50" height="50" fill="'.$this->_color.'"opacity="'.$this->_opacity.'"/>';
	}
}

	
