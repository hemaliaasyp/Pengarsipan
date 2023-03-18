<div class="container-fluid">
    <h3><?php echo $title; ?></h3>
    <hr>
    <br>
    <form method="post" action="<?php echo site_url('Paket/proses_tambah_data') ?>">
        <div class=" form-group row">
            <label for="nama_paket" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="harga" id="harga" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>