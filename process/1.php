<?php
// Include the database configuration file
include('../db.php');
if(isset($_GET['postid'])){
    $query = mysqli_query($con, "SELECT pphoto FROM posts WHERE postid=".$_GET['postid']) or die(mysqli_error($con));
    while($data = mysqli_fetch_array($query)){
        header("Content-type: image/jpeg");
        echo $data['pphoto'];
        
    }
}
// Get images from the database

?>