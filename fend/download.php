<?php 
include "connect.php";
if(isset($_GET['artical_id'])){
    $id = $_GET['artical_id'];
    $query = "select * from editors where id='$id'";
    $result = mysqli_query($con,$query);
    $data = mysqli_fetch_array($result);
    $file = '../edelweiss/upload/artical_pdf/'.$data['pdf'];
    if(file_exists($file)){
        header('Content-Description'.$data['artical_name']);
        header('Content-Disposition:attachment;filename = "'.$data['pdf'].'" ');
        readfile($file);
    }
}

?>