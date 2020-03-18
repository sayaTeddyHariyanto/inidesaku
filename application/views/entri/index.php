<!-- Begin Page Content -->
<div class="container-fluid">

<a class="btn btn-primary" href="<?= base_url() . 'entri/tambahkk'; ?>"> <!--menghubungkan tombol tambahnya dengan controller entri yang functionnya tambahkk-->
<i class="fas fa-user-plus"></i></a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Kartu Keluarga</h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>NO KK</th>
            <th>RT</th>
            <th>RW</th>
            <th>Jumlah Individu</th>
            <th>
              Opsi
            </th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Nomor</th>
            <th>NO KK</th>
            <th>RT</th>
            <th>RW</th>
            <th>Jumlah Individu</th>
            <th>
              Opsi
            </th>
          </tr>
        </tfoot>
        <tbody>
            <?php
                foreach ($tb_kk as $kk) : ?> <!--perulangan, tb_kk berubah jadi kk-->
                <tr>
                    <td><?= $kk->id_kk?></td>
                    <td><?= $kk->no_kk?></td>
                    <td><?= $kk->rt?></td>
                    <td><?= $kk->rw?></td>
                    <td><?php echo $this->db->query("select * from tb_penduduk where id_kk='$kk->id_kk'")->num_rows();?></td> <!--menghitung jumlah data yang ada pada tabel penduduk disuatu kk-->
                    <td>
                        <center>
                          <!--menghubungkan tombol opsi dengan masing" controllernya, dan dipilih berdasarkan id_kk -->
                            <a href="<?php echo site_url('entri/detail/'.$kk->id_kk);?>" class="btn btn-success btn-circle btn-md " data-popup="tooltip" data-original-title="Detail Data" data-placement="top"><i class="fas fa-info-circle"></i></a>
                            <a href="<?php echo site_url('entri/editkk/'.$kk->id_kk);?>" class="btn btn-info" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo site_url('entri/hapus_kk/'.$kk->id_kk);?>"><i class="btn btn-danger btn-circle btn-md " data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fas fa-trash"></i></i></a>
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