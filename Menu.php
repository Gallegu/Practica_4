<link href="CSS/style.css" rel="stylesheet" type="text/css">

<?php

	class Menu{
	
		private $link;
		public function Menu(){	


		echo "<ul id='menu' class='menu'>"; 
		echo $this->link;
		$menu[] = array('Inicio');
		$menu[] = array('Nosotros');
		$menu[] = array('Servicios');
		$menu[] = array('Contacto');
		
		foreach ($menu as $menu_key => $menu_item){
			foreach ($menu_item as $menu_name){
				echo "<li><a href='#'>".$menu_name."</a>";
				}
				echo "</li>";
			}				
	}
}
?>
