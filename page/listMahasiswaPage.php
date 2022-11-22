<?php 
   include '../component/sidebar.php' 
  
?> 
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h2>Profil</h2> 
        <hr> 
        <?php
            $id = $_SESSION['user']['id'];
            $query = mysqli_query($con, "SELECT name,postid,caption FROM posts NATURAL JOIN users WHERE id='$id' ORDER BY postid DESC") or die(mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            echo'<p>Nama: '.$data['name'].'</p>

                <a href="./editMHS.php?id='.$id.'">
                    <i style="color: green" class="fa fa-edit"> Edit Profil</i>
                </a>';
        ?>   
        <table class="table "> 
                <thead> 
                            <tr> 
                            <th scope="col">No</th> 
                            <th scope="col">Nama Pemilik Karya</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Deskripsi</th> 
                            <th scope="col">Hapus</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                <?php 
                $id = $_SESSION['user']['id'];
                $query = mysqli_query($con, "SELECT name,postid,caption FROM posts NATURAL JOIN users WHERE id='$id' ORDER BY postid DESC") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) { 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>'; 
                }else{ 
                    $no = 1; 
                    while($data = mysqli_fetch_assoc($query)){ 
                    echo
                        ' 
                         
                                <tr> 
                                <th scope="row">'.$no.'</th> 
                                <td>'.$data['name'].'</td> 
                                <td> 
                                    <img src="../process/1.php?postid='.$data['postid'].'"width="fit-content" height="200" />
                                </td>
                                <td>'.$data['caption'].'
                                </td>
                                <td>
                                    <a href="../process/delKarya.php?id='.$data['postid'].'"  
                                        onClick="return confirm ( \'Yakin?\')"> 
                                        <i style="color: red" class="fa fa-trash"></i> 
                                    </a>
                                </td>
                            </tr>';
                            $no++;
                    } 
                } 
            ?>
            </tbody> 
            </table>
    </div> 
    </aside> 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body> 
</html> 