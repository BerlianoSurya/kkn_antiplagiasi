<?php 
        include ('../db.php'); 
            $id = $_GET['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $query = mysqli_query($con, "UPDATE users SET name='$name'
            , username='$username' WHERE id='$id'")or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die” ;
            if($query){
                echo
                '<script> 
                alert("Edit Success"); window.location = "../page/listMahasiswaPage.php" 
                </script>'; 
            }else{ 
                echo 
                '<script> 
                alert("Edit Failed"); window.location = "../page/listMahasiswaPage.php" 
                </script>'; 
            }
            
?>