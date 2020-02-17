<?php
    class controller_category_watch_man{
        public function __construct()
        {
            $id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
           //-----
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//tinh tong so ban ghi
			$total_record = 0;
			 $list_man = model::list_all("select * from  category_watch where parent_id=1");
            foreach($list_man as $pagi){
             $total_record = $total_record + model::num_rows("select pk_watch_id from product_watch where fk_category_watch_id= $pagi->pk_category_watch_id");
            }
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p truyen tu url (bien nay se chi trang hien tai)
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao
			$from = $p*$record_per_page;
			//spl
			
			//load view
			include "view/frontend/category_watch_man.php";
			//----- 
        }
    }
    new controller_category_watch_man();
?>