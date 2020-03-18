<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<a class="btn btn-primary" href="<?= base_url() . 'man_akses/tambah'; ?>"><!--menghubungkan tombol tambahnya dengan controller man_akses function tambah-->
<i class="fas fa-user-plus">Tambah Admin</i></a>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">TABEL ADMIN</h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nama Admin</th>
          </tr>
        </thead>

        <tbody>
            <?php
                foreach ($admin as $adm) : ?> <!--perulangan menggunakan foreach mengubah variabel admin menjadi adm-->
                <tr>
                    <td><?= $adm->username?></td>
                    <td><?= $adm->nama_admin?></td>
                </tr>
                <?php endforeach; ?> <!--akhir dari perulangan-->
        </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      
      <!-- End of Main Content -->  