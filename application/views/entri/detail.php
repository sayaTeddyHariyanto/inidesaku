<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<a class="btn btn-primary" href="<?= base_url() . 'entri/view_tambah/' . $id_kk; ?>"> <!--menghubungkan dengan controller view function view_tambah-->
<i class="fas fa-user-plus"></i></a>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Agama</th>
            <th>
              Opsi
            </th>
          </tr>
        </thead>
        <tbody>
            <?php
                foreach ($tb_penduduk as $pnddk) : ?>
                <tr>
                    <td><?= $pnddk->id_kk?></td>
                    <td><?= $pnddk->nik?></td>
                    <td><?= $pnddk->nama?></td>
                    <td><?= $pnddk->tanggal_lahir?></td>
                    <td><?= $pnddk->jk?></td>
                    <td><?= $pnddk->pekerjaan?></td>
                    <td><?= $pnddk->agama?></td>
                    <td>
                        <center>
                          <!--menghubungkan ke controller entri function masing" berdasarkan nik nya-->
                            <a href="<?php echo site_url('entri/edit_data/'.$pnddk->nik);?>" class="btn btn-info" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fas fa-pencil-alt"></i></i></a>
                            <a href="<?php echo site_url('entri/hapus_penduduk/'.$pnddk->nik);?>"><i class="btn btn-danger btn-circle btn-md " data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fas fa-trash"></i></i></a>
                        </center>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      
      <!-- End of Main Content -->  