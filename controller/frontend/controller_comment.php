<?php 
	class controller_comment{
		public function __construct(){
			//--------'--
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				if ($_SESSION["customer_id"] == null) {
				echo "<script>location.href='index.php?controller=login';</script>";
				}
				else {
				$content = $_POST["content"];
				$customer_id = $_SESSION["customer_id"];
				//insert thong tin vao csdl
				model::execute("insert into comment set content='$content',customer_id=$customer_id ");
			}
			}
			$cmt = model::list_all("select * from comment");
			//----------
			//load view
			include "view/frontend/comment.php";
		}
	}
	new controller_comment();
 ?>
