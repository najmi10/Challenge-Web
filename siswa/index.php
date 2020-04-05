<?php
include '../koneksi.php';
$sql = "SELECT * FROM siswa
        INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas
        INNER JOIN jurusan ON siswa.id_jurusan=jurusan.id_jurusan";
$res = mysqli_query($koneksi, $sql);
while (@$data = mysqli_fetch_assoc($res)) {
    $Dasis[] = $data;
}
?>
<?php
include '../aset/header.php';
?>
    <div class="row mt-4">
        <div class="col-md"></div>
    </div>

<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i> Data Siswa</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">NIS</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Jurusan</th>
                    <th scope="row">Kelas</th>
                    <th scope="row">Alamat</th>
                    <th scope="row">Nilai Web</th>
                    <th scope="row">Nilai PBO</th>
                    <th scope="row">Nilai Basis Data</th>
                    <th scope="row">Nilai Desain</th>
                    <th scope="row">Nilai Program Dasar</th>
                    <th scope="row">Rata-rata</th>
                    <th scope="row">Predikat</th>
                    <th scope="row">Keterangan</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach (@$Dasis as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nis'] ?></th>
            <td><?= $p['nama_siswa'] ?></th>
            <td><?= $p['nama_jurusan'] ?></th>
            <td><?= $p['nama_kelas'] ?></th>
            <td><?= $p['alamat'] ?></th>
            <td><?= $p['nilai_web'] ?></th>
            <td><?= $p['nilai_pbo'] ?></th>
            <td><?= $p['nilai_basdat'] ?></th>
            <td><?= $p['nilai_desain'] ?></th>
            <td><?= $p['nilai_progdas'] ?></th>
            <td><?= $p['rata_rata'] ?></th>
            <td><?= $p['predikat'] ?></th>
            <td><?= $p['keterangan'] ?></th>
            <td>
                <a href="#" class="badge badge-warning">Edit</a>
                <a href="#" class="badge badge-danger">Hapus</a>
                <a href="tambah.php" class="badge badge-primary">Tambah</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
<?php
include '../aset/footer.php';
?>