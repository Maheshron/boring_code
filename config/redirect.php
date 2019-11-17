<?php
	class Redirect{

		public function __construct(){
			
                        /** Rediect URL **/
             $cpage = 'index.php';
		     $pageURl=explode("/", $_SERVER['PHP_SELF']);
		     $journal_id=$_SESSION['journal_id'];
            if(isset($_SESSION['uid']))
			{ $pagelist=array("view_journals.php,dashboard.php,view_indexing.php,view_articletypes.php,aboutus.php,authors.php,reviewers.php,view_guestusers.php,subscribers.php,view_seopages.php,view_admins.php");
		
				if($pageURl[3]==$cpage)
		         {	
		         	if($_SESSION['admin_type'] == 'admin')
		         	{
                        
		         		$_SESSION['journal_id']='0';
						 $pageName = 'http://'.$_SERVER['HTTP_HOST'].'/newedeweles_production/admin/view_journals.php';
						header("Location:".$pageName);
		         	}
		         	else if($_SESSION['admin_type'] == 'employee')
		         	{
						$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/newedeweles_production/admin/about_journal.php?journal_id='.$journal_id;
						header("Location:".$pageName);
		         	}
		         }
			  	
			  	else if(in_array($pageURl[3], $pagelist))
			  	{
			  		if($_SESSION['admin_type'] == 'admin')
		         	{
		         		$_SESSION['journal_id']='0';
						
		         	}
		         	else if($_SESSION['admin_type'] == 'employee')
		         	{
						$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/newedeweles/admin/logout.php';
						header("Location:".$pageName);
		         	}
			  	}
			}
			
			else
			{
				if($pageURl[4]!=$cpage)
		         {
		         	$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/newedeweles/admin/index.php';
						header("Location:".$pageName);
		         }
			}
        }
    
	}


?>