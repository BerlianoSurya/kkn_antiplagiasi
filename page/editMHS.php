<?php 
   include '../component/sidebar.php' 
   
?>

    <div class="container p-3 m-4 h-100"
        style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h2>EDIT KARYA SENI</h2>
        <hr>
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            echo'
                <form action="../process/editMHSProcess.php ?id='.$data['id'].'" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name" value="'.$data['name'].'" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input class="form-control" id="username" name="username" value="'.$data['username'].'" aria-describedby="emailHelp">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="editmhs" value="editmhs">Edit</button>
                    </div>
                </form>
            '
        ?>
        <script type="text/javascript">
            var prodi = "<?= $prodi;?>";
            document.getElementById("prodi").value = prodi;
        </script>
    </div>
