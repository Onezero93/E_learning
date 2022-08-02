<?php
require_once('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //input 
    $id_register = $_POST['id'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];
    $number = $_POST['number'];
    //proses
    $proses = "UPDATE crud SET nama = '$nama',nik = '$niki',alamat ='$alamat', jenis_kelamin = '$jk',email='$email',pasword='$pasword, number ='$number' where id_register = '$id_register' ";
    //output
    if (mysqli_query($con, $proses)) {
        //true
        $response["success"] = 1;
        $response["pesan"] = "berhasil";
        echo json_encode($response);
    } else {
        //false
        $response["success"] = 0;
        $response["pesan"] = "gagal";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["pesan"] = "tidak ada request";
    echo json_encode($response);
}