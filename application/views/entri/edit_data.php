<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Edit Data Penduduk</h3>
    </center>

    <?php foreach($tb_penduduk as $pen)?> <!-- perulangan untuk menampilkan data yang dimasukkan-->
    <form action="<?php echo base_url() . 'entri/update_data'; ?>" method="post"> <!--menghubungkan dengan controller entri function update_data-->
    <table style="margin:20px auto;">
        <div class="form-group" >
            <label for="nama">Nama</label>
            <input type="hidden" class="form-control" name="id_kk" id="id_kk" value="<?= $pen->id_kk?>"> <!--disembunyikan karena tidak perlu diisi, hanya penanda data yang masuk nantinya-->
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $pen->nama?>">
        </div>
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" id="nik" value="<?= $pen->nik?>">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $pen->tanggal_lahir?>">
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jk" id="jk" value="<?= $pen->jk?>">
        </div>
        <div class="form-group">
            <label for="gol_dar">Golongan Darah</label>
            <input type="text" class="form-control" name="gol_dar" id="gol_dar" value="<?= $pen->gol_dar?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $pen->alamat?>">
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $pen->pekerjaan?>">
        </div>
        <div class="form-group">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="<?= $pen->kewarganegaraan?>">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $pen->tempat_lahir?>">
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" name="agama" id="agama" value="<?= $pen->agama?>">
        </div>

        <center>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" style=></td>
        </tr>
        </center>
    </table>
    </form>
</body>
</html>