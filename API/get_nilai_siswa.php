<?php 
require 'connect_db.php';

$nisn = $_POST['nisn'];

$query      = "SELECT * FROM tbl_nilai WHERE nisn='$nisn'";
$odj_query  = mysqli_query($koneksi, $query) or die("Erro in query $odj_query.".mysqli_error($koneksi));

$result = array();
while ($data  = mysqli_fetch_array($odj_query)) {
    array_push($result, array(
        "nama" => $data["nama"],
        "nisn" => $data["nisn"],
        "nama_kelas" => $data["nama_kelas"],
        "id_semester" => $data["id_semester"],
        "tahun_ajar" => $data["tahun_ajar"],
        "nama_mapel" => $data["nama_mapel"],
        "nilai_umum" => $data["nilai_umum"],
        "nilai_huruf" => $data["nilai_huruf"],
        "ekstra" => $data["ekstra"],
        "nilai_ekstra" => $data["nilai_ekstra"],
    ));
}
echo json_encode(
    $result
);


header('Content-Type: application/json');



?>