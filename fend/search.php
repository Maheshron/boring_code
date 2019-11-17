<?php
include "connect.php";
if(isset($_POST['query'])){
    $output = '';
    $q = "select * from journal where journal_title like '%".$_POST['query']."%'";
    $r = mysqli_query($con,$q);
    $output = '<ul class="uii">';
    if(mysqli_num_rows($r) > 0){
        while($row = mysqli_fetch_array($r)){
            $output .= '<li class="lii">'.$row['journal_title'].'</li>';
        }
    }
    else{
        $output .= '<li> Journal Not Found</li>';
    }
    $output .= '</ul>';
    echo $output;
}

?>