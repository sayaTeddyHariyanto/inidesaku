<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'man_akses/tambah_admin'; ?>" method="post"> <!--menghubungkan dari halaman tambah admin ke controller man_akses/tambah_admin menggunakan post--> 
                    <div class="form-group">
                        <label for="nama_admin"> Nama Admin : </label> <!--inputan dan label nama-->
                        <input type="text" class="form-control form-control-user" id="nama_admin" name="nama_admin" placeholder="Masukan Nama Admin" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="useraname"> Username : </label> <!--inputan dan label username-->
                        <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Nama Admin" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="password"> Password : </label> <!--inputan dan label password-->
                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukkan Password" title="Isikn data dengan benar" required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
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