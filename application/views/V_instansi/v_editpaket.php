<div class="container-fluid">
    <h3><?php echo $title; ?></h3>
    <hr>
    <br>
    <form method="post" action="<?php echo site_url('Paket/proses_edit_data/' . $paket['id_paket']); ?>">
        <input type="hidden" name="id_paket" value="<?php echo $paket['id_paket']; ?> ">
        <div class=" form-group row">
            <label for="nama_paket" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?php echo $paket['nama_paket']; ?> " required>
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $paket['keterangan']; ?> " required>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $paket['harga']; ?> " required>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>