

<?php
include "main.php";

foreach($_POST['value'] as $key => $value){
    $data['editor_id'] = $key + 1;
    updatePosition($data,$value);
}
echo "Sorting Done";
function updatePosition($data,$id){
    $con = mysqli_connect('localhost','edelweissuser','edelweissuser1','edelweiss');
    if(array_key_exists("first_name",$data)){
        $data["first_name"] = $this->real_escape_string($data['first_name']);
    }
    foreach($data as $key => $value){
        $value = "'$value'";
        $updates[] = "$key=$value";
    }
    $imploadAray= implode(",",$updates);
    $query = "update editors set $imploadAray where editor_id ='$id'";
    $result = mysqli_query($con,$query);
    if($result){
        return "Editor Position Changed";
    }
    else{
        return "error while updating position";
    }



}

?>