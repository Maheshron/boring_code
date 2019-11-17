<?php
include "config.php";
	class Dashboard{

		public $db;
     /*** get_admindetails() Variables ***/
        public $a_name;
        public $a_password;
        public $a_type;
        public $a_journal_id;
     /*** for showing the Journal Details by ID ***/
        public $journal_title;
        public $issn_number;
        public $journal_emailid;
        public $journal_url;
        public $journal_manuscript_link;
        public $journal_guidelines_url;
        public $journal_page_url;
        public $journal_youtube_url;
        public $journal_header_img;
        public $journal_short_name;
        public $journal_meta_title;
        public $journal_meta_key;
        public $journal_meta_desc;
        public $journal_img;
        public $journal_home_page;
        public $journal_aim_scope;
        public $journal_instruction;
        public $journal_menuscript;
        public $journal_special_issue_guide_lines;
        public $journal_short_description;
        public $author;
        public $added_on;
        public $modified_on;
        public $added_by;
        public $modified_by;
        public $journal_status;
    /*** for showing the Indexing Details by ID ***/
        public $index_title;
    public $indexing_id;
        public $index_logo;
        public $logo_description;
        public $i_link;
        public $i_added_by;
        public $i_modified_by;
        public $i_added_on;
        public $i_modified_on;
      /*** For getting the articlelisttype_data ***/
        public $articlelisttype_data;
       /*** For Getting editors data ***/
          public $firstname;
         public $lastname;
         public $universityname;
         public $email;
         public $designation;
         public $type;
         public $searchuniversity;
         public $universityurl;
         public $countryname;
         public $profileurl;
         public $interviewurl;
         public $googlescolar;
         public $description;
         public $network;
         public $biography;
         public $researchinterest;
         public $interview;
         public $universitylogo;
         public $profilepic;
        /*** For SEO DATA ***/
        public $seourl;
        public $seotitle;
        public $seodescription;
        public $seokeywords;
        ///*** FOR INNERSIDEBAR SEO PAGE ***/
        public $seourl1;
        public $seotitle1;
        public $seodescription1;
        public $seokeywords1; 


         ///*** For getting reviews data ***///
         public $reviewername;
         public $revieweruniversityname;
         public $reviewerdesignation;
         public $revieweremail;
         public $reviewerdescription;
         public $reviewercountry;
        


         
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database";
			        exit;
			}
		}
     /*** for registration process ***/
		public function reg_admin($username, $password){

			
			$sql="SELECT * FROM admin WHERE name='$username'";

			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO admin SET name='$username', password='$password',admin_type='admin'";
				$result1 = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result1;
			}
			else { return false;}
		}
     /*** for login process ***/
		public function check_login($emailusername, $password){

             //$password = md5($password);
			$sql2="SELECT * from admin WHERE name='$emailusername' and password='$password'";

			//checking if the username is available in the table
        	$result2 = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result2);
        	$count_row = $result2->num_rows;

	        if ($count_row == 1) {
	            // this login var will use for the session thing
	              $_SESSION['login'] = true;
	              $_SESSION['uid'] = $user_data['admin_id'];
                $_SESSION['admin_type'] = $user_data['admin_type'];
                $_SESSION['journal_id'] = $user_data['journal_id'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}
     /*** for showing the username or fullname ***/
    	public function get_admindetails($uid){
          
    		$sql3="SELECT * FROM admin WHERE admin_id =$uid";
	        $result3 = mysqli_query($this->db,$sql3);
	        $admin_data = mysqli_fetch_array($result3);
	        $this->a_name= $admin_data['name'];
            $this->a_password= $admin_data['password'];
            $this->a_type= $admin_data['admin_type'];
            $this->a_journal_id= $admin_data['journal_id'];
            return true;
    	}
     /*** for showing the Admins List***/
    	public function get_adminlist(){
          
    		$sql4="SELECT * FROM admin";
	        $result4 = mysqli_query($this->db,$sql4);
	        while($adminlist_data = mysqli_fetch_array($result4)){
            echo '<tr>
                <td>'.$adminlist_data["admin_id"].'</td>
                <td>'.$adminlist_data["name"].'</td>
                <td>'.$adminlist_data["password"].'</td>
                <td>'.$adminlist_data["admin_type"].'</td>
                <td>'.$adminlist_data["journal_id"].'</td>
                <td class="text-center">
                   <a href="about_admin.php?admin_id='.$adminlist_data["admin_id"].'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="delete.php?admin_id='.$adminlist_data["admin_id"].'&type=admin" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>';
            }
            return true;
    	}
         /*** for editing the Admin  ***/
        public function update_admin($id,$username, $password){
               $sqladmin_u= "update admin set name='$username',password='$password' where admin_id='$id'";
               $resultadmin_u= mysqli_query($this->db,$sqladmin_u);
               return $resultadmin_u;
        }
     /*** for registration process ***/
		public function del_admin($id,$type){
             if($type=="admin"){
				$sql5="DELETE from admin where admin_id='$id'";
				$result5 = mysqli_query($this->db,$sql5) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result5;
             }else{
			    return false;
			}
			
		}
    /*** for journals count ***/
		public function count_journals(){

			$sql6="SELECT id from journal";

			//checking if the username is available in the table
        	$result6 = mysqli_query($this->db,$sql6);
        	echo $count_row = $result6->num_rows;
            
    	}
    /*** for indexing count ***/
		public function count_indexing(){

			$sql7="SELECT indexing_id from indexing";

			//checking if the username is available in the table
        	$result7 = mysqli_query($this->db,$sql7);
        	echo $count_row = $result7->num_rows;
            
    	}
         /*** for indexing count ***/
		public function count_articaltypes(){

			$sql8="SELECT id from artical_types";

			//checking if the username is available in the table
        	$result8 = mysqli_query($this->db,$sql8);
        	echo $count_row = $result8->num_rows;
            
    	}
         /*** for Guest Users count ***/
		public function count_guestusers(){

			$sql9="SELECT user_id from guest_users";

			//checking if the username is available in the table
        	$result9 = mysqli_query($this->db,$sql9);
        	echo $count_row = $result9->num_rows;
            
    	}
        /*** for Subscribers count ***/
		public function count_subscribe(){

			$sql10="SELECT id from subscribe";

			//checking if the username is available in the table
        	$result10 = mysqli_query($this->db,$sql10);
        	echo $count_row = $result10->num_rows;
            
    	}
         /*** for Admin count ***/
		public function count_admin(){

			$sql11="SELECT admin_id from admin";

			//checking if the username is available in the table
        	$result11 = mysqli_query($this->db,$sql11);
        	echo $count_row = $result11->num_rows;
            
    	}
        /*** for Editors count ***/
		public function count_editors(){

			$sql12="SELECT editor_id from editors";

			//checking if the username is available in the table
        	$result12 = mysqli_query($this->db,$sql12);
        	echo $count_row = $result12->num_rows;
            
    	}
        /*** for Keywords count ***/
		public function count_keywords(){

			$sql13="SELECT keyword_id from keywords";

			//checking if the username is available in the table
        	$result13 = mysqli_query($this->db,$sql13);
        	echo $count_row = $result13->num_rows;
            
      }
      public function get_journallist1(){
          
    		$sql14="SELECT * FROM journal";
	        $result14 = mysqli_query($this->db,$sql14);
	        while($journallist_data = mysqli_fetch_array($result14)){
        
                echo '<li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>'.$journallist_data["journal_title"].'</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="delete.php?journal_id='.$journallist_data["id"].'" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="about_journal.php?journal_id='.$journallist_data["id"].'" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> View Journal</a>
                  
                </figcaption>
              </figure>
               
            </div>
          </li>';
            }
            return true;
    	}

         /*** for showing the Journals List***/
    	public function get_journallist($categorie,$sub_categorie){
          
    		$sql14="SELECT * FROM journal where categorie='$categorie' and sub_categorie='$sub_categorie'";
	        $result14 = mysqli_query($this->db,$sql14);
	        while($journallist_data = mysqli_fetch_array($result14)){
        
                echo '<li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>'.$journallist_data["journal_title"].'</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="delete.php?journal_id='.$journallist_data["id"].'" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="about_journal.php?journal_id='.$journallist_data["id"].'" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> View Journal</a>
                </figcaption>
              </figure>
               
            </div>
          </li>';
            }
            return true;
    	}
         /*** for showing the Indexing List***/
    	public function get_indexinglist(){
          
    		$sql15="SELECT * FROM indexing";
	        $result15=mysqli_query($this->db,$sql15);
	        while($indexinglist_data=mysqli_fetch_array($result15)){
        
                echo '<tr>
                
                <td> <img class="brand-img" src="../edelweiss/upload/indexes/'.$indexinglist_data["index_logo"].'" alt="..." style="width:120px;height:60px;"></td>
                <td>'.$indexinglist_data["logo_description"].'</td>
                <td>'.$indexinglist_data["link"].'</td>
                <td class="text-center">
                   <a href="about_indexing.php?indexing_id='.$indexinglist_data["indexing_id"].'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="delete.php?delete_indexid='.$indexinglist_data["indexing_id"].'" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>';
            }
            return true;
    	}
        /*** for showing the Artical Types List***/
    	public function get_articaltypeslist(){
          
    		$sql16="SELECT * FROM artical_types";
	        $result16 = mysqli_query($this->db,$sql16);
	        while($articaltypeslist_data = mysqli_fetch_array($result16)){
        
                echo ' <tr>
                <td>'.$articaltypeslist_data["id"].'</td>
                <td>'.$articaltypeslist_data["artical_type"].'</td>
                <td class="text-center">
                   <a href="about_articletype.php?articletypeslist_id='.$articaltypeslist_data['id'] .'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="delete.php?articletype_id='.$articaltypeslist_data['id'].'" name="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>';
            }
            return true;
      }
      
         /*** for showing the Journal Details by ID ***/
    	public function get_journaldetails($journal_id){
          
    		$sql17="SELECT * FROM journal WHERE id = $journal_id";
	        $result17 = mysqli_query($this->db,$sql17);
	        $journal_data = mysqli_fetch_array($result17);
	        $this->journal_title= $journal_data['journal_title'];
            $this->issn_number= $journal_data['issn_number'];
            $this->journal_emailid= $journal_data['journal_emailid'];
            $this->journal_url= $journal_data['journal_url'];
            $this->journal_manuscript_link= $journal_data['journal_manuscript_link'];
            $this->journal_guidelines_url= $journal_data['journal_guidelines_url'];
            $this->journal_page_url= $journal_data['journal_page_url'];
            $this->journal_youtube_url= $journal_data['journal_youtube_url'];
            $this->journal_header_img=$journal_data['journal_header_img'];
            $this->journal_short_name= $journal_data['journal_short_name'];
            $this->journal_meta_title= $journal_data['journal_meta_title'];
            $this->journal_meta_key= $journal_data['journal_meta_key'];
            $this->journal_meta_desc= $journal_data['journal_meta_desc'];
            $this->journal_img= $journal_data['journal_img'];
            $this->journal_home_page= $journal_data['journal_home_page'];
            $this->journal_aim_scope= $journal_data['journal_aim_scope'];
            $this->journal_instruction= $journal_data['journal_instruction'];
            $this->journal_menuscript= $journal_data['journal_menuscript'];
            $this->journal_special_issue_guide_lines= $journal_data['journal_special_issue_guide_lines'];
            $this->journal_short_description= $journal_data['journal_short_description'];
            $this->author= $journal_data['author'];
            $this->added_on= $journal_data['added_on'];
            $this->modified_on= $journal_data['modified_on'];
            $this->added_by= $journal_data['added_by'];
            $this->modified_by= $journal_data['modified_by'];
            $this->journal_status= $journal_data['status'];
            return true;
    	}
        /*** for showing the Indexing  Details by ID ***/
        public function get_indexingdetails($indexing_id){
          
    		$sql18="SELECT * FROM indexing WHERE indexing_id = $indexing_id";
	        $result18 = mysqli_query($this->db,$sql18);
            $indexing_data = mysqli_fetch_array($result18);
            $this->index_title= $indexing_data['logo_description'];
            $this->indexing_id= $indexing_data['indexing_id'];
	        $this->index_logo= $indexing_data['index_logo'];
            $this->logo_description= $indexing_data['logo_description'];
            $this->i_link= $indexing_data['link'];
            $this->i_added_by= $indexing_data['added_by'];
            $this->i_modified_by= $indexing_data['modified_by'];
            $this->i_added_on= $indexing_data['added_on'];
            $this->i_modified_on= $indexing_data['modified_on'];
        }
        /*** articlelisttype_edit ***/
        public function get_articletypesdetails($articletypeslist_id){
            $sql19 = "select * from artical_types where id =$articletypeslist_id";
            $result19 = mysqli_query($this->db,$sql19);
            $articaltypeslist_data = mysqli_fetch_array($result19);
            $this->articlelisttype_data = $articaltypeslist_data['artical_type'];
            return true;
        }
        /*** Add_Indexing ***/
        public function add_indexing($indexing_image,$indexlogo_link,$indexlogo_description,$indexalttext){
          
          
            $sql20 = "insert into indexing(index_logo,logo_description,link,added_by,added_on,alttext) values('$indexing_image','$indexlogo_description','$indexlogo_link',1,NOW(),'$indexalttext')";
            $result20 = mysqli_query($this->db,$sql20);
            return $result20;
        }
         /*** Add Journal Indexing ***/
        public function add_journalindexing($journal_id,$index_id){
            $sqlj_i = "insert into journal_indexing(journal_id,indexing_id) values('$journal_id','$index_id')";
            $resultj_i= mysqli_query($this->db,$sqlj_i);
            return $resultj_i;
        }
        /*** Add article ***/
        public function add_articletype($addarticle){
          $sql21 = "insert into artical_types(artical_type) values('$addarticle')";
          $result21 = mysqli_query($this->db,$sql21);
          return $result21;
        }
        /*** for editing the articletype  ***/
        public function update_articaltypelist($id,$updatedarticalname){
               $sql22 = "update artical_types set artical_type='$updatedarticalname' where id='$id'";
               $result22 = mysqli_query($this->db,$sql22);
               return $result22;
        }
        public function delete_articletype_id($articletype_id){
          $sql23 = "delete  from artical_types where id='$articletype_id'";
          $result23 = mysqli_query($this->db,$sql23);
          return $result23;
        }
        /*** Add_Journals ***/
        public function add_journal($journal_title,$j_journal_logo,$j_journal_image,$journal_s_name,$journal_issn_no,$journal_email,$journal_url,$youtube_link,$journal_short_desc,$home_page,$aims_scope_page,$meta_keywords,$meta_title,$meta_desc,$username,$pass,$logoalt,$imagealt){
          $sqladd_journal ="insert into journal(journal_title,journal_header_img,journal_img,journal_short_name,issn_number,journal_emailid,journal_url,journal_youtube_url,journal_short_description,journal_home_page,journal_aim_scope,journal_meta_title,journal_meta_key,journal_meta_desc,added_by,logoalt,imagealt) values ('$journal_title','$j_journal_logo','$j_journal_image','$journal_s_name','$journal_issn_no','$journal_email','$journal_url','$youtube_link','$journal_short_desc','$home_page','$aims_scope_page','$meta_title','$meta_keywords','$meta_desc',1,'$logoalt','$imagealt')";
          $resultadd_journal= mysqli_query($this->db,$sqladd_journal);
            if($resultadd_journal){
            $sqlj_get = "select * from journal where journal_emailid='$journal_email' and journal_title='$journal_title'";
            $resultj_get = mysqli_query($this->db,$sqlj_get);
            $j_get_data = mysqli_fetch_array($resultj_get);
            echo $s_journal_id = $j_get_data['id'];
                
                $sqladmin_journal ="insert into admin(name,password,admin_type,journal_id) values ('$journal_title','$pass','employee','$s_journal_id')";
                $resultadmin_journal= mysqli_query($this->db,$sqladmin_journal);
                return $resultadmin_journal;
            }
            
            
            
         return $resultadd_journal;
        }
        /*** for updating the journal ***/
        public function update_journal($id,$j_image,$j_logo,$journal_title,$journal_s_name,$journal_issn_no,$journal_email,$journal_url,$youtube_link,$journal_short_desc,$journal_home_page,$aims_scope_page,$meta_title,$meta_keywords,$meta_desc){
                  $sql27 = "update journal set issn_number='$journal_issn_no',journal_emailid='$journal_email',journal_url='$journal_url',journal_youtube_url='$youtube_link',journal_header_img='$j_logo',journal_title='$journal_title',journal_short_name='$journal_s_name',journal_meta_title ='$meta_title',journal_meta_key ='$meta_keywords', journal_meta_desc='$meta_desc', journal_img='$j_image',journal_home_page='$journal_home_page',journal_aim_scope ='$aims_scope_page',journal_short_description ='$journal_short_desc',modified_on= NOW(),modified_by=1 where id='$id'";
                        $result27 = mysqli_query($this->db,$sql27);
                        return $result27;
        }
        /***  delete journal ***/
        public function delete_journal_id($journal_id){
          $sql28 = "delete from journal where id ='$journal_id'";
          $result28 = mysqli_query($this->db,$sql28);
          return $result28;
        }
          /***  update indexing ***/
         public function update_indexing($id,$indexing_image,$index_link,$index_logo_description,$index_title){
           $sql29 = "update indexing set index_logo='$indexing_image',logo_description='$index_logo_description',link='$index_link',modified_by=1,modified_on=NOW() where indexing_id = '$id'";
          $result29 = mysqli_query($this->db,$sql29);
          return $result29;
          }
  
        /***  Deleting Index Id ***/
        public function  delete_index_id($index_id){
          $sql30 = "delete from indexing where indexing_id = '$index_id'";
          $result30 = mysqli_query($this->db,$sql30);
          return $result30;
        }
        /***  Deleting Journal Index Id ***/
        public function  delete_journalindexid($delete_journalindexid){
          $sqldj = "delete from journal_indexing where journal_indexing_id = '$delete_journalindexid'";
          $resultdj = mysqli_query($this->db,$sqldj);
          return $resultdj;
        }
        
        ///***  Get Editors ***/
        public function get_editors($journal_id){
          $sql32 = "select * from editors where journal_id='$journal_id' order by Position";
          $result32 = mysqli_query($this->db,$sql32);
          while($editor_data = mysqli_fetch_array($result32)){
            echo '
            <tr data-position='.$editor_data['Position'].' data-index='.$editor_data['editor_id'].'>
            <td>'.$editor_data['editor_id'].'</td>
            <td>'.$editor_data['first_name'].'</td>
            <td>'.$editor_data['editor_email'].'</td>
            <td>'.$editor_data['editor_designation'].'</td>
              <td>'.$editor_data['country_name'].'</td>
             
            <td class="text-center">
               <a href="about_editor.php?editor_id='.$editor_data['editor_id'].'&journal_id='.$journal_id.'" title="Edit"><i class="fa fa-edit"></i></a>
             </td>
             <td class="text-center">
                 <a href="deletebyid.php?editor_id='.$editor_data['editor_id'].'&journal_id='.$journal_id.'" title="Delete"><i class="fa fa-trash-o"></i></a>
             </td>
            
          </tr>
            ';
          }
        }
        /*** get editor details by id ***/
        public function get_editordetails($id){
            $sql33 = "select * from editors where editor_id='$id'";
            $result33 = mysqli_query($this->db,$sql33);
            $editor_data = mysqli_fetch_array($result33);
            $this->firstname = $editor_data['first_name'];
            $this->lastname = $editor_data['last_name'];
            $this->universityname = $editor_data['editor_university'];
            $this->email = $editor_data['editor_email'];
            $this->designation = $editor_data['designation'];
            $this->type = $editor_data['editor_designation'];
            $this->searchuniversity = $editor_data['search_university'];
            $this->universityurl = $editor_data['university_url'];
            $this->countryname = $editor_data['country_name'];
            $this->profileurl = $editor_data['profile_url'];
            $this->interviewurl = $editor_data['interview_url'];
            $this->googlescolar = $editor_data['google_scolar'];
            $this->description = $editor_data['description'];
            $this->network = $editor_data['network'];
            $this->biography = $editor_data['biography'];
            $this->researchinterest = $editor_data['research_interest'];
            $this->interview = $editor_data['interview'];
            $this->universitylogo = $editor_data['university_logo'];
            $this->profilepic = $editor_data['image'];
              return true;
              }
        /*** for editing the About Us  ***/
        public function update_about($about_text){
               $sql24 = "update pages set page_content='$about_text',modified_by='1',modified_on=NOW() where page_id='1'";
               $result24 = mysqli_query($this->db,$sql24);
               return $result24;
        }
        /*** for editing the Authors  ***/
        public function update_author($author_content){
               $sql25 = "update pages set page_content='$author_content',modified_by='1',modified_on=NOW() where page_id='2'";
               $result25 = mysqli_query($this->db,$sql25);
               return $result25;
        }
        /*** for editing the Reviewers  ***/
        public function update_reviewer($reviewer_content){
               $sql26 = "update pages set page_content='$reviewer_content',modified_by='1',modified_on=NOW() where page_id='3'";
               $result26 = mysqli_query($this->db,$sql26);
               return $result26;
        }
        //// **** Add Editors *****///////
        public function add_editor($id,$profile_image,$university_logo,$editor_firstname,$editor_lastname,$editor_universityname,$editor_emailaddress,$editor_designation,$editor_type,$editor_searchuniversity,$editor_universityurl,$editor_country,$editor_profileurl,$editor_interviewurl,$editor_googlescolar,$editor_description,$editor_network,$editor_biography,$editor_researchinterest,$editor_interview,$palttext,$ualttext){
          $sql31 = "insert into editors(journal_id,first_name,last_name,designation,editor_designation,	editor_in_chief,editor_email,editor_university,university_logo,search_university,university_url,country_name,profile_url,interview_url,description,image,network,biography,research_interest,interview,google_scolar,added_by,added_on,palttext,ualttext) values($id,'$editor_firstname','$editor_lastname','$editor_designation','$editor_designation','$editor_type','$editor_emailaddress','$editor_universityname','$university_logo','$editor_searchuniversity','$editor_universityurl','$editor_country','$editor_profileurl','$editor_interviewurl','$editor_description','$profile_image','$editor_network','$editor_biography','$editor_researchinterest','$editor_interview','$editor_googlescolar','$id',NOW(),'$palttext','$ualttext')";
          $result31 = mysqli_query($this->db,$sql31);
          return $result31;
        }
        /////*** update editors  ***/
        public function update_editor($id,$profile_image,$university_logo,$first_name,$last_name,$university,$email,$designation,$editor_type,$searchuniversity,$universityurl,$countryname,$editorprofileurl,$editorinterviewurl,$googlescolar,$editordescription,$network,$biography,$researchinterest,$interview){
          $sql34 = "update editors set first_name='$first_name',last_name='$last_name',designation='$designation',editor_designation='$editor_type',editor_email='$email',editor_university='$university',university_logo='$university_logo',search_university='$searchuniversity',university_url='$universityurl',country_name='$countryname',profile_url='$editorprofileurl',interview_url='$editorinterviewurl',description='$editordescription',image='$profile_image',network='$network',biography='$biography',research_interest='$researchinterest',interview='$interview',google_scolar='$googlescolar',modified_by='$id',modified_on='Now()' where editor_id ='$id' ";
          $result34 = mysqli_query($this->db,$sql34);
          return $result34;
        }
        /*** delete editor ***/
        public function delete_editor_id($editor_id){
          $sql35 = "delete from editors where editor_id='$editor_id'";
          $result35 = mysqli_query($this->db,$sql35);
          return $result35;
        }
         /*** To get Key Words ***/
        public function get_keywords($id){
              $sql35 = "select * from keywords where journal_id='$id' order by Position";
              $result35 = mysqli_query($this->db,$sql35);
              while($keywordsdata = mysqli_fetch_array($result35)){
                echo '
                <tr data-position='.$keywordsdata['Position'].' data-index='.$keywordsdata['keyword_id'].'>
                
                <td>'.$keywordsdata['keyword'].'</td>
             
                <td class="text-center">
                   <a href="about_keyword.php?keyword_id='.$keywordsdata['keyword_id'].'&journal_id='.$keywordsdata['journal_id'].'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="deletebyid.php?keyword_id='.$keywordsdata['keyword_id'].'&journal_id='.$keywordsdata['journal_id'].'" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>
                ';
              }
               
        }


        /*** To add keywords  ***/
        public function add_keyword($journal_id,$keyword_image,$keyword,$description,$altimgtext,$imgcaption,$metakeywords,$metatitle,$metadescription){
              $sql36 = "insert into keywords(journal_id,keyword,description,image,alt_img_text,image_caption,meta_keywords,meta_title,meta_description) values('$journal_id','$keyword','$description','$keyword_image','$altimgtext','$imgcaption','$metakeywords','$metatitle','$metadescription')";
              $result36 = mysqli_query($this->db,$sql36);
              return $result36;
        }
        /*** To get keywords by Id ***/
       public function get_keywordlist($id,$journal_id){
         $sql37 = "select * from keywords where keyword_id='$id'";
         $result37 = mysqli_query($this->db,$sql37);
         $keywordsdata = mysqli_fetch_array($result37);
         $this->keywordsimg = $keywordsdata['image'];
         $this->keyword = $keywordsdata['keyword'];
         $this->keyworddescription = $keywordsdata['description'];
         $this->altimg = $keywordsdata['alt_img_text'];
         $this->imgcaption = $keywordsdata['image_caption'];
         $this->metakeywords = $keywordsdata['meta_keywords'];
         $this->metatitle = $keywordsdata['meta_title'];
         $this->metadescription = $keywordsdata['meta_description'];
         return true;

        }
        /*** To update keywords ***/
       public function update_keyword($id,$ukeyword_image,$ukeyword,$udescription,$ualtimgtext,$uimgcaption,$umetakeywords,$umetatitle,$umetadescription){
         $sql38 = "update keywords set keyword='$ukeyword',description='$udescription',image='$ukeyword_image',alt_img_text='$ualtimgtext',image_caption='$uimgcaption',meta_keywords='$umetakeywords',meta_title='$umetatitle',meta_description='$umetadescription' where keyword_id ='$id'";
         $result38 = mysqli_query($this->db,$sql38);
         return $result38;
       }
       /*** To delete keywords ***/
       public function delete_keyword_id($id){
         $sql39 = "delete from keywords where   keyword_id='$id'";
         $result39 = mysqli_query($this->db,$sql39);
         return $result39; 
       }
        /*** for showing the SEO Pages List***/
    	public function get_SEOPageslist(){
          
    		$sqlSEO="SELECT * FROM digital_marketing";
	        $resultSEO = mysqli_query($this->db,$sqlSEO);
	        while($SEOlist_data = mysqli_fetch_array($resultSEO)){
           $seodescription =  substr($SEOlist_data['description'],0,50);
           $seokeyword =      substr($SEOlist_data['keywords'],0,30);
                echo ' <tr>
                <td>'.$SEOlist_data["url"].'</td>
                <td>'.$SEOlist_data["title"].'</td>
                <td>'.$seodescription.'....</td>
                <td>'.$seokeyword.'....</td>
                <td class="text-center">
                   <a href="about_seopages.php?seopages_id='.$SEOlist_data['id'] .'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="delete.php?seopages_id='.$SEOlist_data['id'].'" name="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>';
            }
            return true;
      }
        /*** Add_SEO Pages ***/
        public function add_SEOPages($url,$journalid,$title,$description,$keywords){
            $sql20 = "insert into digital_marketing(url,journal_id,title,description,keywords) values('$url','$journalid','$title','$description','$keywords')";
            $result20 = mysqli_query($this->db,$sql20);
            return $result20;
        }
        /*** To get SEO Pages by Id ***/
       public function get_SEOPagesdata($seopages_id){
         $sqlseo = "select * from digital_marketing where id='$seopages_id'";
         $resultseo = mysqli_query($this->db,$sqlseo);
         $seodata = mysqli_fetch_array($resultseo);
         $this->seourl= $seodata['url'];
         $this->seotitle= $seodata['title'];
         $this->seodescription= $seodata['description'];
         $this->seokeywords= $seodata['keywords'];
         return true;

        }
         /*** To update SEO Pages ***/
       public function update_SEOPages($id,$url,$title,$description,$keywords){
         $sqlu_seo = "update digital_marketing set url='$url',description='$description',title='$title',keywords='$keywords' where id ='$id'";
         $resultu_seo= mysqli_query($this->db,$sqlu_seo);
         return $resultu_seo;
       }
         /*** To delete SEO Pages ***/
       public function delete_seopages_id($seopages_id){
         $sqld_seo = "delete from digital_marketing where id='$seopages_id'";
         $resultd_seo = mysqli_query($this->db,$sqld_seo);
         return $resultd_seo; 
       }
       ///***  To get SEO PAGE LIST of innerside bar ***/
       public function get_innerside_SEOPageslist($journal_id){
          
    		$sqlSEO="SELECT * FROM digital_marketing where journal_id = '$journal_id'";
	        $resultSEO = mysqli_query($this->db,$sqlSEO);
	        while($SEOlist_data = mysqli_fetch_array($resultSEO)){
              $d = $SEOlist_data['description'];
              $k = $SEOlist_data['keywords'];
                echo ' <tr>
                <td>'.$SEOlist_data["url"].'</td>
                <td>'.$SEOlist_data["title"].'</td>
                <td>'.substr($d,0,30).'...........</td>
                <td>'.substr($k,0,40).'...........</td>
                <td class="text-center">
                   <a href="about_innersidebar_seopage.php?journal_id='.$SEOlist_data['journal_id'] .'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="delete.php?journalseo_id='.$SEOlist_data['journal_id'].'" name="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>';
            }
            return true;
      }
        /*** Add_SEO Pages innersidebar ***/
        public function add_innersidebar_SEOPages($url,$journalid,$title,$description,$keywords){
            $sql20 = "insert into digital_marketing(url,journal_id,title,description,keywords) values('$url','$journalid','$title','$description','$keywords')";
            $result20 = mysqli_query($this->db,$sql20);
            return $result20;
        }
        /*** To get SEO Pages of innersidebar by Id ***/
       public function get_innersidebar_SEOPagesdata($seopages_id){
         $sqlseo = "select * from digital_marketing where journal_id='$seopages_id'";
         $resultseo = mysqli_query($this->db,$sqlseo);
         $seodata = mysqli_fetch_array($resultseo);
         $this->seourl1= $seodata['url'];
         $this->seotitle1= $seodata['title'];
         $this->seodescription1= $seodata['description'];
         $this->seokeywords1 = $seodata['keywords'];
         return true;

        }
         /*** To update SEO Pages of innerside bar***/
       public function update_innersidebar_SEOPages($id,$url,$title,$description,$keywords){
         $sqlu_seo = "update digital_marketing set url='$url',description='$description',title='$title',keywords='$keywords' where journal_id ='$id'";
         $resultu_seo= mysqli_query($this->db,$sqlu_seo);
         return $resultu_seo;
       }
         /*** To delete SEO Pages of innersidbar***/
       public function delete_innersidebar_seopages_id($seopages_id){
         $sqld_seo = "delete from digital_marketing where journal_id='$seopages_id'";
         $resultd_seo = mysqli_query($this->db,$sqld_seo);
         return $resultd_seo; 
       }

         /*** To get journal  reviews ***/
      public function getjournal_reviews($journal_id){
        $sql40 = "select * from reviewer where journal_id='$journal_id' order by Position";
        $result40 = mysqli_query($this->db,$sql40);
        while($reviewsdata = mysqli_fetch_array($result40)){
          echo '
          <tr data-position='.$reviewsdata['Position'].' data-index='.$reviewsdata['review_id'].'>
          
          <td>'.$reviewsdata['name'].'</td>
          <td>'.$reviewsdata['university_name'].'</td>
          <td>'.$reviewsdata['reviewer_designation'].'</td>
           <td>'.$reviewsdata['country'].'</td>
           <td>'.$reviewsdata['description'].'</td>
       
          <td class="text-center">
             <a href="about_review_journal.php?review_id='.$reviewsdata['review_id'].'&journal_id='.$reviewsdata['journal_id'].'" title="Edit"><i class="fa fa-edit"></i></a>
           </td>
           <td class="text-center">
               <a href="deletebyid.php?review_id='.$reviewsdata['review_id'].'&journal_id='.$reviewsdata['journal_id'].'" title="Delete"><i class="fa fa-trash-o"></i></a>
           </td>
        </tr>
          ';
        }
      }
      /*** ***/
       public function get_review_journal($id,$journal_id){
         $sql41 = "select * from reviewer where review_id='$id' and journal_id ='$journal_id' order by Position";
         $result41 = mysqli_query($this->db,$sql41);
         $reviewsdata =  mysqli_fetch_array($result41);
         $this->reviewername = $reviewsdata['name']; 
         $this->revieweruniversityname = $reviewsdata['university_name'];
         $this->reviewerdesignation = $reviewsdata['reviewer_designation'];
         $this->reviewercountry = $reviewsdata['country'];
         $this->revieweremail = $reviewsdata['email'];
         $this->reviewerdescription = $reviewsdata['description']; 
        return true; 
        }
      public function  update_reviewerdata($id,$journal_id,$rname,$runiversityname,$rdesignation,$rcountry,$remail,$description){
        $sql42 = "update reviewer set journal_id='$journal_id',name='$rname',university_name='$runiversityname',reviewer_designation='$rdesignation',country='$rcountry',email='$remail',description='$description' where review_id='$id' ";
        $result42 = mysqli_query($this->db,$sql42);
        return $result42;
      }
      ///*** for adding journal reviews ***/
      public function add_review($journal_id,$name,$uname,$rdesignation,$country,$email,$description){
        $sql43 = "insert into reviewer(journal_id,name,university_name,reviewer_designation,country,email,description) values('$journal_id','$name','$uname','$rdesignation','$country','$email','$description')";
        $result43 = mysqli_query($this->db,$sql43);
        return $result43;

      }   
      ///*** ***/
      public function delete_review_id($review_id){
        $sql44 = "delete from reviewer where review_id='$review_id'";
        $result44 = mysqli_query($this->db,$sql44);
        return $result44;
      }
        ///*** Adding Journal Article ***/
      public function add_journal_article($journal_id,$r,$volume_number,$issue_number,$status,$month,$year,$article_title,$article_short_name,$article_type,$doi_number,$doi_link,$university_name,$country,$author_name,$pdf_link,$full_text_link,$full_text,$aabstract,$abstract_link,$supplimentary_link,$enter_keywords,$starting_page_number,$ending_page_number,$enter_issn,$insertValue,$imagealttext,$altn){
                                $articalinpress=1;
                                $sql45 = "insert into articals(journal_id,artical_name,artical_short_name,artical_type_id,artical_number,doi_number,doi_link,author_names,university_name,country_name,pdf_link,full_text_link,artical_content,abstract,abstract_link,supplimentry_link,keywords,starting_page_number,ending_page_number,issn_number,volume_number,issue_number,added_by,added_on,year,month,status,pdf,status_type,image,imagealttext,altn) values('$journal_id','$article_title','$article_short_name','$article_type','$issue_number','$doi_number','$doi_link','$author_name','$university_name','$country','$pdf_link','$full_text_link','$full_text','$aabstract','$abstract_link','$supplimentary_link','$enter_keywords','$starting_page_number','$ending_page_number','$enter_issn','$volume_number','$issue_number',1,NOW(),'$year','$month','$status','$r','$articalinpress','$insertValue','$imagealttext','$altn')";
                                $result45 = mysqli_query($this->db,$sql45);
                                return $result45;
      }
      ///*** showing all articles ***///
      public function get_journal_articles($id){
               $sql46 = "select * from articals where journal_id='$id' order by Position";
               $result46 = mysqli_query($this->db,$sql46);
               while($articledata = mysqli_fetch_array($result46)){
                       echo '
                       <tr data-position='.$articledata['Position'].' data-index='.$articledata['artical_id'].'>
                <td>'.$articledata['artical_name'].'</td>
                <td>'.$articledata['artical_short_name'].'</td>
                <td>'.$articledata['issue_number'].'</td>
                  <td>'.$articledata['volume_number'].'</td>
                <td class="text-center">
                   <a href="about_article.php?journal_id='.$articledata['journal_id'].'&article_id='.$articledata['artical_id'].'" title="Edit"><i class="fa fa-edit"></i></a>
                 </td>
                 <td class="text-center">
                     <a href="deletebyid.php?article_id='.$articledata['artical_id'].'" title="Delete"><i class="fa fa-trash-o"></i></a>
                 </td>
              </tr>
                       ';
               }
      }
      public function get_journal_articles1($id){
        $sql461 = "select * from articals where journal_id='$id'  order by Position";
        $result461 = mysqli_query($this->db,$sql461);
        while($articledata = mysqli_fetch_array($result461)){
                echo '
                <tr data-position='.$articledata['Position'].' data-index='.$articledata['artical_id'].'>
         <td>'.$articledata['artical_name'].'</td>
         <td>'.$articledata['artical_short_name'].'</td>
         <td>'.$articledata['issue_number'].'</td>
           <td>'.$articledata['volume_number'].'</td>
         <td class="text-center">
            <a href="about_article.php?journal_id='.$articledata['journal_id'].'&article_id='.$articledata['artical_id'].'" title="Edit"><i class="fa fa-edit"></i></a>
          </td>
          <td class="text-center">
              <a href="deletebyid.php?article_id='.$articledata['artical_id'].'" title="Delete"><i class="fa fa-trash-o"></i></a>
          </td>
       </tr>
                ';
        }
}
      ///*** For getting articles by id ***/
      public function get_journal_articles_byid($id){
              $sql47 = "select * from articals where artical_id ='$id'";
              $result47 =  mysqli_query($this->db,$sql47);
              $articledata = mysqli_fetch_array($result47);
              $this->article_name = $articledata['artical_name'];                  
              $this->article_short_name = $articledata['artical_short_name'];
              $this->article_type = $articledata['artical_type_id'];
              $this->article_number = $articledata['artical_number'];
              $this->doi_number = $articledata['doi_number'];
              $this->doi_link = $articledata['doi_link'];
              $this->author_names = $articledata['author_names'];
              $this->university_name = $articledata['university_name'];
              $this->country_name = $articledata['country_name'];
              $this->pdf_link = $articledata['pdf_link'];
              $this->full_text_link = $articledata['full_text_link'];
              $this->artical_content = $articledata['artical_content'];
              $this->articleabstract = $articledata['abstract'];
              $this->abstract_link = $articledata['abstract_link'];
              $this->supplimentry_link = $articledata['supplimentry_link'];
              $this->articlekeywords = $articledata['keywords'];
              $this->start_page_number = $articledata['starting_page_number'];
              $this->end_page_number = $articledata['ending_page_number'];
              $this->issn_number = $articledata['issn_number'];
              $this->year = $articledata['year'];
              $this->month = $articledata['month'];
              $this->astatus = $articledata['status'];
              $this->pdf_file = $articledata['pdf'];
              $this->volume_number = $articledata['volume_number'];
              $this->issue_number = $articledata['issue_number'];
              $this->aissn_number = $articledata['issn_number'];
              return true;

        }
        ///*** For Getting the article status details ***/
        public function get_article_status($volume_number,$issue_number){
          $sql50 = "select * from articals where volume_number='$volume_number' and issue_number='$issue_number'";
          $result50 = mysqli_query($this->db,$sql50);
          while($row = mysqli_fetch_array($result50)){
                 echo '
                 <form method="post" action="">
                 <tr>
                 <td>
                     <b>Volume '. $row['volume_number'].' ,Issue '.$row['issue_number'] .'</b><br>
                      <div class="container" style="padding:10px">'.$row['artical_name'].'<br>
                     '.$row['doi_link'].' <br>
                     '.$row['author_names'].'</div>
                   </td>
                 
                 <td class="text-center">
                      <button type="submit" class="btn btn-primary mt-2 fixbtn" name="ArticleInPress"  title="Edit" > Move To Articleinpress</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="PreviousIssue"   title="Edit" > Move To Previous Issues</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="SpecialIssue"    title="Edit" > Move To Special Issues</button>
                  </td>
                 
               </tr>
               </form>
                 ';
          }
        }

        public function get_article_status_pi($journal_id){
          $sqlpi = "select * from articals where journal_id='$journal_id' and status_type='PreviousIssue'";
          $resultpi = mysqli_query($this->db,$sqlpi);
          while($row = mysqli_fetch_array($resultpi)){
                 echo '
                 
                 <tr>
                 <td>
                     <b>Volume '. $row['volume_number'].' ,Issue '.$row['issue_number'] .'</b><br>
                      <div class="container" style="padding:10px">'.$row['artical_name'].'<br>
                     '.$row['doi_link'].' <br>
                     '.$row['author_names'].'</div>
                   </td>
                 
                 <td class="text-center">
                 <form action="" method="post">
                      <button type="submit" class="btn btn-primary mt-2 fixbtn" name="Archive"  value= "Archive" title="Edit">Move To Archive</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="ArticleInPress" value="ArticleInPress"   title="Edit" > Move To Articleinpress</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="currentIssue"  value="currentIssue"  title="Edit" > Move To CurrentIssue </button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="SpecialIssue"   value="SpecialIssue" title="Edit" > Move To Special Issues</button>
                  </form>
                      </td>
                 
               </tr>
               
                 ';
          }
        }
        public function currentIssue($id){
          $sqlci = "select * from articals where journal_id='$id' and status_type = 'current_issue'";
          $resultci = mysqli_query($this->db,$sqlci);
          while($row = mysqli_fetch_array($resultci)){
                 echo '
                 
                 <tr>
                 <td>
                     <b>Volume '. $row['volume_number'].' ,Issue '.$row['issue_number'] .'</b><br>
                      <div class="container" style="padding:10px">'.$row['artical_name'].'<br>
                     '.$row['doi_link'].' <br>
                     '.$row['author_names'].'</div>
                   </td>
                 
                 <td class="text-center">
                 <form action="" method="post">
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="Archive" value="Archive" title="Edit">Move To Archive </button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="ArticleInPress" value="ArticleInPress"   title="Edit" > Move To Articleinpress</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="PreviousIssue"  value="PreviousIssue"  title="Edit" > Move To Previous Issues</button>
                      <button type="submit" class="btn btn-primary mt-2 fixbtn"  name="SpecialIssue"   value="SpecialIssue" title="Edit" > Move To Special Issues</button>
                  </form>
                      </td>
                 
               </tr>
               
                 ';
        }
      }
      

      
        public function update_issue($id,$status){
          $sql51  = "update articals set status_type = '$status' where artical_id ='$id' ";
          $result51 = mysqli_query($this->db,$sql51);
          return true;
        }

        ///*** for deleting journals article by id ***/
        public function delete_jarticle_id($article_id){
          $sql48 ="delete from articals where artical_id ='$article_id'";
          $result48 = mysqli_query($this->db,$sql48);
          return $result48;
        }
        ///*** For Updating Journal Article Id ***/
         public function  update_journal_article($id,$journal_id,$volume_number,$issue_number,$status,$month,$year,$article_title,$article_short_name,$article_type,$doi_number,$doi_link,$university_name,$country,$author_name,$pdf_link,$full_text_link,$full_text,$aabstract,$abstract_link,$supplimentary_link,$enter_keywords,$starting_page_number,$ending_page_number,$enter_issn){
           $sql49 = "update articals set journal_id='$journal_id',artical_name='$article_title',artical_short_name='$article_short_name',artical_type_id='$article_type',artical_number='$issue_number',doi_number='$doi_number',doi_link='$doi_link',author_names='$author_name',university_name='$university_name',country_name='$country',pdf_link='$pdf_link',full_text_link='$full_text_link',artical_content='$full_text',abstract='$aabstract',abstract_link='$abstract_link',supplimentry_link='$supplimentary_link',keywords='$enter_keywords',starting_page_number='$starting_page_number',ending_page_number='$ending_page_number',issn_number='$enter_issn',volume_number='$volume_number',issue_number='$issue_number',modified_by=1,modified_on=NOW(),year='$year',month='$month',status='$status' where artical_id='$id'"; 
           $result49 = mysqli_query($this->db,$sql49);
           return $result49;
          }
     /*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }
     /*** Ending the session ***/
	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    } 
        

	}


?>