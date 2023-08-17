<?php 
require 'connect_db.php';

$nisn        = $_POST['nisn'];

$query      = "SELECT * FROM tbl_siswa WHERE nisn='$nisn'";
$odj_query  = mysqli_query($koneksi, $query);
$data       = mysqli_fetch_array($odj_query);

if ($data) {
    echo json_encode(
        array(
            'response' => true,
            'payload' => array(
                "id" => $data['id'],
                "nisn" => $data["nisn"],
                "nama" => $data["nama"],
                "jk" => $data["jk"],
                "tmp_lahir" => $data["tmp_lahir"],
                "agama" => $data["agama"],
                "alamat" => $data["alamat"],
                "namaayah" => $data["namaayah"],
                "namaibu" => $data["namaibu"],
                "nama_kelas" => $data["nama_kelas"],
            ) 
        )
    );
}else {
    echo json_encode(
        array(
            'response' => false,
            'payload' => null
        )
    );
}

header('Content-Type: application/json');



?>