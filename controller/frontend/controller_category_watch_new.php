<?php 
	class controller_category_watch_new{ 
		public function __construct(){
		//
		$data = model::list_all("select * from product_watch order by pk_watch_id desc limit 10");
		//load view
		include "view/frontend/category_watch_new.php";
		}
	}
	new controller_category_watch_new();
 ?>