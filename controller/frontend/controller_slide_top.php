<?php 
	class controller_slide_top{ 
		public function __construct(){
		//
		$data = model::list_all("select * from slide_top");
		//load view
		include "view/frontend/slide_top.php";
		}
	}
	new controller_slide_top();
 ?>