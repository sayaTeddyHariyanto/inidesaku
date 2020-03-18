<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Edit Kartu Keluarga</h3>
    </center>

    <?php foreach($tb_kk as $kk)?> 
    <form action="<?php echo base_url() . 'entri/updatekk'; ?>" method="post"> <!--menghubungkan dengan controller entri yang functionnya updatekk menggunakan method post-->
    <table style="margin:20px auto;">
        <div class="form-group" >
            <label for="no_kk"> NO. KK</label>
            <input type="hidden" class="form-control" name="id_kk" id="id_kk" value="<?php echo $kk->id_kk?>"> <!--disembunyikan agar tidak dapat dirubah, hanya dijadikan penanda data saja-->
            <input type="text" class="form-control" name="no_kk" id="no_kk" value="<?php echo $kk->no_kk?>">
        </div>
        <div class="form-group">
            <label for="rt">RT</label>
            <input type="text" class="form-control" name="rt" id="rt" value="<?= $kk->rt?>">
        </div>
        <div class="form-group">
            <label for="rw">RW</label>
            <input type="text" class="form-control" name="rw" id="rw" value="<?= $kk->rw?>">
        </div>
        
        <center>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
        </center>
    </table>
    </form>
</body>
</html>