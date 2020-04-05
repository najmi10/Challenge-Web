<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2>Tambah Data Siswa</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                <div class="form-group">
                            <label for="anggota">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <label for="anggota">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label><br>
                            <select name="id_jurusan" id="sel">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Teknik Jaringan Akses">Teknik Jaringan Akses</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label><br>
                            <select name="id_kelas" id="sel">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telp">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                            </div>
                        <div class="form-group">
                            <label for="username">Nilai Mata Pelajaran Web</label>
                            <input type="text" class="form-control" name="nilai_web" id="nilai_web" placeholder="Masukkan nilai Web">
                        </div>
                        <div class="form-group">
                            <label for="username">Nilai Mata Pelajaran PBO</label>
                            <input type="text" class="form-control" name="nilai_pbo" id="nilai_pbo" placeholder="Masukkan nilai PBO">
                        </div>
                        <div class="form-group">
                            <label for="username">Nilai Mata Pelajaran Basis Data</label>
                            <input type="text" class="form-control" name="nilai_basdat" id="nilai_basdat" placeholder="Masukkan nilai Basis Data">
                        </div>
                        <div class="form-group">
                            <label for="username">Nilai Mata Pelajaran Desain</label>
                            <input type="text" class="form-control" name="nilai_desain" id="nilai_desain" placeholder="Masukkan nilai Desain">
                        </div>
                        <div class="form-group">
                            <label for="username">Nilai Mata Pelajaran Program Dasar</label>
                            <input type="text" class="form-control" name="nilai_progdas" id="nilai_progdas" placeholder="Masukkan nilai Program Dasar">
                        </div>

                        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
