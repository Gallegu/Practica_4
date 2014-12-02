<link href="CSS/style.css" rel="stylesheet" type="text/css">

<?php

	class Pie{
		
		private $texto;
		public function __construct($cadena){
			
			$this->texto = $cadena;
		}
	
	public function Pie(){
?>



		<?php echo $this->texto;?>
		<?php
	}
}