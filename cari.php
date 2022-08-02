<?php
require_once('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //proses
    $id_register = $_GET['id_register'];
    $proses = mysqli_query($con, "SELECT * FROM elearning where id_register = "$id_register" ");
    if (mysqli_num_rows($proses) > 0) {
        //jika ada data
        $response["success"] = 1;
        $row = mysqli_fetch_array($proses);
        $hasil = array();
        $hasil['id_register'] = $row['id_register'];
        $hasil['nama'] = $row['nama'];
        $hasil['nik'] = $row['nik'];
        $hasil['alamat'] = $row['alamat'];
        $hasil['jenis_kelamin'] = $row['jenis_kelamin'];
        $hasil['email'] = $row['email'];
        $hasil['pasword'] = $row['pasword'];
        $hasil['alamat'] = $row['alamat'];
        $response['data'] = $hasil;
        echo json_encode($response);
    } else {
        //tidak ada data
        $response["success"] = 0;
        $response["pesan"] = "tidak ada data";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["pesan"] = "tidak ada request";
    echo json_encode($response);
}