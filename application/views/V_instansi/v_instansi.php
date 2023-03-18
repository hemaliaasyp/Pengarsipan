<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>
    </div>

    <div class="card-body">
      <?php echo $this->session->flashdata('pesan'); ?>
      <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No. </th>
              <th>Nama Instansi</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($instansi as $pic) : ?>
              <tr>
                <td><?php echo  $no++; ?></td>
                <td><?php echo  $pic['nama_instansi']; ?></td>
                <td><?php echo  $pic['email_instansi']; ?></td>
                <td>
                  <button type=" button" class="badge btn-primary" data-toggle="modal" data-target="#editModal<?php echo $pic['id_instansi']; ?>">
                    Edit
                  </button>
                  <a href="<?php echo site_url() ?>instansi/hapus_data/<?php echo $pic['id_instansi']; ?>" class="badge badge-danger">Hapus</a>
                </td>

              <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!--modal--->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('instansi/proses_tambah_data'); ?>
        <div class="form-group">
          <label>Nama instansi</label>
          <input type="text" name="nama_instansi" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Email Instansi</label>
          <input type="text" name="email_instansi" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    <?php echo form_close() ?>
  </div>
</div>

<?php $no = 0;
foreach ($instansi as $pic) : $no++; ?>
  <div class="modal fade" id="editModal<?php echo $pic['id_instansi']; ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('instansi/proses_edit_data/' . $pic['id_instansi']); ?>
          <input type="hidden" name="id_instansi" value="<?php echo $pic['id_instansi']; ?> ">
          <div class="form-group">
            <label>Nama instansi</label>
            <input type="text" name="nama_instansi" class="form-control" value="<?php echo $pic['nama_instansi']; ?>">
          </div>
          <div class="form-group">
            <label>Email Instansi</label>
            <input type="text" name="Email Instansi" class="form-control" value="<?php echo $pic['email_instansi']; ?>" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach ?>