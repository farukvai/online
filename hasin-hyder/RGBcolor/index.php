<?php 

class RGB{
	private $color;

	public function __construct($color=''){
        $this->color=ltrim($color,'#');
	}

	public setColor(){
		return $this->color;
	}

	public getColor(){
		 $this->color;
	}
}

 ?>