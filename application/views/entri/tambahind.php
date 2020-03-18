<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Anggota</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'entri/tambahind'; ?>" method="post"> <!--menghubungkan dengan controller entri/tambahind-->
                <input type="text" id="id_kk" name="id_kk" value="<?= $id_kk; ?>" hidden>
                <!--label dan inputannya-->
                    <div class="form-group">
                        <label for="nik"> NIK : </label>
                        <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukan NIK" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="nama"> Nama : </label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="NAMA..." required></input>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir"> Tempat Lahir : </label>
                        <input type="text" name="tempat_lahir" class="form-control form-control-user" id="tempat_lahir" placeholder="Tempat Lahir ..." title="Isikan Angka" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir"> Tanggal Lahir : </label>
                        <input type="text" name="tanggal_lahir" class="form-control form-control-user" id="tanggal_lahir" placeholder="Tanggal Lahir ..." title="Isikan Angka" required>
                    </div>
                    <div class="form-group">
                        <label for="jk"> Jenis Kelamin : </label>
                        <input type="text" name="jk" class="form-control form-control-user" id="jk" placeholder="Laki-laki / Perempuan ..." required>
                    </div>
                    <div class="form-group">
                        <label for="gol_dar"> Golongan Darah : </label>
                        <input type="text" name="gol_dar" class="form-control form-control-user" id="gol_dar" placeholder=" A/ B/ O/ AB" title="Isikan satu huruf" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat : </label>
                        <input type="text" name="alamat" class="form-control form-control-user" id="alamat" placeholder="alamat ..." required>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan"> Pekerjaan : </label>
                        <input type="text" name="pekerjaan" class="form-control form-control-user" id="pekerjaan" placeholder="pekerjaan ..." required>
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan"> kewarganegaraan : </label>
                        <input type="text" name="kewarganegaraan" class="form-control form-control-user" id="kewarganegaraan" placeholder="Kewarganegaraan ..." required>
                    </div>
                    <div class="form-group">
                        <label for="agama"> Agama : </label>
                        <input type="text" name= "agama" class="form-control form-control-user" id="agama" placeholder="Agama ..." required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Simpan</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>