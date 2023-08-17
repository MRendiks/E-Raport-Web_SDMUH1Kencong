<?php 
require 'connect_db.php';

$query      = "SELECT * FROM tbl_profil";
$odj_query  = mysqli_query($koneksi, $query) or die("Erro in query $odj_query.".mysqli_error($koneksi));

$result = array();
while ($data  = mysqli_fetch_array($odj_query)) {
    array_push($result, array(
        "nm_sekolah" => $data["nm_sekolah"],
        "npsn" => $data["npsn"],
        "jenjang" => $data["jenjang"],
        "akreditasi" => $data["akreditasi"],
        "alamat" => $data["alamat"],
        "kepsek_nama" => $data["kepsek_nama"],
        "kepsek_nip" => $data["kepsek_nip"],
        "kepsek_pangkat" => $data["kepsek_pangkat"],
        "kepsek_jabatan" => $data["kepsek_jabatan"],
    ));
}
echo json_encode(
    $result
);


header('Content-Type: application/json');



?>