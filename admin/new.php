<?php
        session_start();
        $cpage = 'new.php';
		$pageURl=explode("/", $_SERVER['PHP_SELF']);
		 $journal_id=$_SESSION['journal_id'];
		if(isset($_SESSION['uid']))
			{ $pagelist=array("index.php");

				if($pageURl[4]==$cpage)
		         {	
		         	if($_SESSION['admin_type'] == 'admin')
		         	{
                        
		         		$_SESSION['journal_id']='0';
						 $pageName = 'http://'.$_SERVER['HTTP_HOST'].'/new/edeweles/admin/view_journals.php';
						header("Location:".$pageName);
		         	}
		         	else if($_SESSION['admin_type'] == 'employee')
		         	{
						$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/new/edeweles/admin/about_journal.php?journal_id='.$journal_id;
						header("Location:".$pageName);
		         	}
		         }
			  	
			  	else if(in_array($pageURl[4], $pagelist))
			  	{
			  		if($_SESSION['admin_type'] == 'admin')
		         	{
		         		$_SESSION['journal_id']='0';
						
		         	}
		         	else if($_SESSION['admin_type'] == 'employee')
		         	{
						$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/new/edeweles/admin/logout.php';
						header("Location:".$pageName);
		         	}
			  	}
			}
			
			else
			{
				if($pageURl[4]!=$cpage)
		         {
		         	$pageName = 'http://'.$_SERVER['HTTP_HOST'].'/new/edeweles/admin/index.php';
						header("Location:".$pageName);
		         }
			}
			
	
?>
