<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Kartu Keluarga</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'entri/tambah_kk'; ?>" method="post">
                    <div class="form-group">
                        <label for="no_kk"> No. KK : </label>
                        <input type="text" class="form-control form-control-user" id="no_kk" name="no_kk" placeholder="Masukan Nomor KK" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="rt"> RT : </label>
                        <input name="rt" class="form-control" id="rt" placeholder="RT..." required></input>
                    </div>
                    <div class="form-group">
                        <label for="rw"> RW : </label>
                        <input type="text" name="rw" class="form-control form-control-user" placeholder="RW ..." title="Isikan Angka" required>
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