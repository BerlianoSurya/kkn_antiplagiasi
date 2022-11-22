<?php 
   include '../component/sidebar.php' 
   
?> 
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h2 >Daftarkan Karya</h2> 
        <hr> 
        <?php 
        $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query);
        echo'
            <form action="../process/addkaryaProses.php?id='.$id.'" method="POST" enctype="multipart/form-data"> 
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan Gambar Karyamu Di Bawah <i class="fa fa-arrow-right"></i><span style="font-size="></span></label><br>
                    <input type="file" name="pphoto" value="" placeholder="Gambar Karyamu"/>
                </div>
                <div class="mb-3"> 
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label> 
                    <input class="form-control" id="caption" name="caption" placeholder="Deskripsikan Karyamu"> 
                </div> 
                
                <div class="d-grid gap-2"> 
                    <button type="submit" class="btn btn-primary" name="addpost">Daftarkan Karya</button> 
                </div> 
            </form>';
        ?> 
    </div> 
    </aside> 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body> 
</html>