<?php 
session_start();
include_once('../template/header.php');
?>

<?php
if (isset($_POST["submit"])) {
    $tahun = $_POST["tahun_ajar"];

    $tambahkelas = "INSERT INTO `tbl_tahun` (`id`, `tahun_ajar`) VALUES (NULL, '$tahun')";
    if (mysqli_query($koneksi, $tambahkelas) > 0) {
        echo "<script>
 alert('data berhasil ditambahkan');
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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Tahun</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama">Tahun Pelajaran
                                <input type="text" name="tahun_ajar" id="tahun_ajar" value="" class="form-control">
                            </label>

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