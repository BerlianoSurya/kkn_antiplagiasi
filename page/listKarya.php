<?php 
   include '../component/sidebar.php' 
  
?> 
    <style>

#myInput {
  background-image: url('../—Pngtree—search icon_4699282.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  
}

#myTable th, #myTable td {
}

#myTable tr {
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h2 >DAFTAR KARYA SENI</h2> 
        <hr> 
        <input type="text" id="myInput" class="search"onkeyup="filterRows(caption)" placeholder="Cari karya">
            <table class="table " id="myTable"> 
            <thead> 
                <tr> 
                <th scope="col">No</th> 
                <th scope="col">Nama Pemilik Karya</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php 
                $query = mysqli_query($con, "SELECT name,postid,caption FROM posts NATURAL JOIN users ORDER BY postid DESC") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) { 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>'; 
                }else{ 
                    $no = 1; 
                    while($data = mysqli_fetch_assoc($query)){ 
                    echo' 
                        <tr> 
                            <th scope="row">'.$no.'</th> 
                            <td>'.$data['name'].'</td> 
                            <td> 
                                <img src="../process/1.php?postid='.$data['postid'].'"width="fit-content" height="200" />
                            </td>
                            <td>'.$data['caption'].'
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
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#myTable tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
</body> 
</html> 