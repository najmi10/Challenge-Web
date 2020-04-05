<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $id_jurusan="";
if($_POST['id_jurusan'] == "Rekayasa Perangkat Lunak"){
    $id_jurusan = 111;
}else if($_POST['id_jurusan'] == "Teknik Komputer dan Jaringan"){
    $id_jurusan = 222;
}else if($_POST['id_jurusan'] == "Teknik Jaringan Akses"){
    $id_jurusan = 333;
}
$id_kelas = "";
if($_POST['id_kelas'] == "10"){
    $id_kelas=1;
}else if($_POST['id_kelas'] == "11"){
    $id_kelas = 2;
}else if($_POST['id_kelas'] == "12"){
    $id_kelas = 3;
}
    $alamat = $_POST['alamat'];
    $nilai_web = $_POST['nilai_web'];
    $nilai_pbo = $_POST['nilai_pbo'];
    $nilai_basdat = $_POST['nilai_basdat'];
    $nilai_desain = $_POST['nilai_desain'];
    $nilai_progdas = $_POST['nilai_progdas'];
    $rata_rata = ($nilai_web + $nilai_pbo + $nilai_basdat + $nilai_desain + $nilai_progdas)/5;
    $predikat="";
    if($rata_rata >= 90){
        $predikat = "A";
    }else if($rata_rata >= 80){
        $predikat = "B";
    }else if($rata_rata >= 70){
        $predikat = "C";
    }else if($rata_rata >= 60){
        $predikat = "D";
    }else if($rata_rata >= 50){
        $predikat = "E";
    }
    $keterangan ="";
    if($rata_rata >= 90){
        $keterangan ="Excellent";
    }else if($rata_rata >= 80){
        $keterangan ="Baik";
    }else if($rata_rata >= 70){
        $keterangan ="Cukup";
    }else if($rata_rata >= 60){
        $keterangan ="Kurang";
    }else if($rata_rata >= 50){
        $keterangan = "Rendah";
    }

    
    $sql = "INSERT INTO siswa (nama_siswa, id_jurusan, id_kelas, alamat, nilai_web, nilai_pbo, nilai_basdat, nilai_desain, nilai_progdas, rata_rata, predikat, keterangan)
    VALUES ('$nama_siswa', '$jurusan', '$kelas', '$alamat', '$nilai_web', '$nilai_pbo', '$nilai_basdat', '$nilai_desain', '$nilai_progdas', '$rata_rata', '$predikat', '$keterangan')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1){
    header("Location: index.php");
 }else {
    header("Location: index.php");
 }
 
}
else 
{
    header("Location: tambah.php");    
}

?>
