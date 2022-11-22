<?php
    if(isset($_POST['addpost'])){
        include('../db.php');
        $id = $_GET['id'];
        $pphoto =addslashes(file_get_contents($_FILES['pphoto']['tmp_name']));
        $caption = $_POST['caption'];
        $imageProperties = getimageSize($_FILES['pphoto']['tmp_name']);

        $query = mysqli_query($con , "INSERT INTO posts (id,pphoto,caption) VALUES('$id','$pphoto','$caption')  ") or die(mysqli_error($con));
        if($query){
            echo'<script> alert("uploaded id='.$id.'");window.location= "../page/listKarya.php" </script>';
        }
        else{
            echo'<script> alert("gagal");window.location= "../page/addkaryaPage.php" </script>';
        }
    }
?>