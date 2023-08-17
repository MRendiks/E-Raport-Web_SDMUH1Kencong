<?php 
session_start();
include_once('../template/header.php');
?>

<?php
if (isset($_POST["submit"])) {
    $id = $_POST["id_kelas"];
    $kelas = $_POST["nama_kelas"];
    $wali = $_POST["nama_guru"];


    $ubahkelas = "UPDATE `tbl_kelas` SET `id_kelas` = '$id', `nama_kelas` = '$kelas', `nama_guru` = '$wali' WHERE `tbl_kelas`.`id_kelas` = '$id'";
    if (mysqli_query($koneksi, $ubahkelas) > 0) {
        echo "<script>
 alert('data berhasil diubah');
 document.location.href= 'index.php';
 </script>";
    } else {
        echo "nub!";
    }
}

?>

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kelas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="" method="post">
                    <?php
                        $id = $_GET["id"];
                        $query = "SELECT * FROM tbl_kelas WHERE id_kelas = " . $id;
                        $kelas = mysqli_query($koneksi, $query);
                        // while ($result = mysqli_fetch_assoc($kelas)) {
                        //     $id = $result["id_kelas"];
                        //     $kelas = $result["nama_kelas"];
                        //     $wali = $result["nama_guru"];
                        // }

                        if (mysqli_num_rows($kelas) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($kelas)) {
                              $id_kelas = $row['id_kelas'];
                              $nama_kelas = $row['nama_kelas'];
                              $nama_guru = $row['nama_guru'];
                            }
                          } else {
                            echo "0 results";
                          }
                    ?>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="nama">ID KELAS
                                <input type="text" name="id_kelas" id="id_kelas" value="<?= $id_kelas ?>" class="form-control">
                            </label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama">NAMA KELAS
                                <input type="text" name="nama_kelas" id="nama_kelas" value="<?= $nama_kelas ?>" class="form-control">
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="jk">Guru Wali Kelas</label>
    
                            <input type="text" name="nama_guru" id="nama_kelas" value="<?= $nama_guru ?>" class="form-control">
                               
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </form>
                <br><br>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include '../template/footer.php' ?>