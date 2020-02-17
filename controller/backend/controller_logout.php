<?php
class controller_logout {
	public function __construct() {
		//huy session
		unset($_SESSION["email"]);
		//quay tro lai trang admin
		header("location:admin.php");
	}
}
new controller_logout();
?>
