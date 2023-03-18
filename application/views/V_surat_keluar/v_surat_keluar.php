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
              <th>Nama Surat Masuk</th>
              <th>Nama Perusahaan</th>
              <th>Nama Instansi</th>
              <th>No Surat Masuk</th>
              <th>Tanggal Surat</th>
              <th>Perihal</th>
              <th>File</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($surat_keluar as $pic) : ?>
              <tr>
                <td><?php echo  $no++; ?></td>
                <td><?php echo  $pic['nama_surat_keluar']; ?></td>
                <td><?php echo  $pic['nama_perusahaan']; ?></td>
                <td><?php echo  $pic['nama_instansi']; ?></td>
                <td><?php echo  $pic['no_surat_keluar']; ?></td>
                <td><?php echo  $pic['tanggal_surat']; ?></td>
                <td><?php echo  $pic['perihal']; ?></td>
                <td><iframe src="<?php echo base_url() . '/gambar/' . $pic['file']; ?>" type="pdf" width="200" height="100"></iframe></td>

                <td>
                  <button type=" button" class="badge btn-primary" data-toggle="modal" data-target="#editModal<?php echo $pic['id_surat_keluar']; ?>">
                    Edit
                  </button>

                  <a href="<?php echo site_url() ?>surat_keluar/hapus_data/<?php echo $pic['id_surat_keluar']; ?>" class="badge badge-danger">Hapus</a>
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


<!-- Modal Tambah -->
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
        <?php echo form_open_multipart('surat_keluar/proses_tambah_data'); ?>
        <div class="form-group">
          <label>Nama Surat Masuk</label>
          <input type="text" name="nama_surat_keluar" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Nama Perusahaan</label>
          <input type="text" name="nama_perusahaan" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Nama Instansi</label>
          <input type="text" name="nama_instansi" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Perihal</label>
          <input type="text" name="perihal" class="form-control" required>
        </div>
        <div class="form-group">
          <label>No Surat Masuk</label>
          <input type="text" name="no_surat_keluar" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Tanggal Surat</label>
          <input type="date" name="tanggal_surat" class="form-control" required>
        </div>
        <div class="form-group">
          <label>File</label>
          <input type="file" name="userfile" class="form-control" size="20" required>
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

<!-- Modal -->

<!-- Modal Edit -->
<?php $no = 0;
foreach ($surat_keluar as $pic) : $no++; ?>
  <div class="modal fade" id="editModal<?php echo $pic['id_surat_keluar']; ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('surat_keluar/proses_edit_data/' . $pic['id_surat_keluar']); ?>
          <input type="hidden" name="id_surat_keluar" value="<?php echo $pic['id_surat_keluar']; ?> ">
          <div class="form-group">
            <label>Nama surat_keluar</label>
            <input type="text" name="nama_surat_keluar" class="form-control" value="<?php echo $pic['nama_surat_keluar']; ?>">
          </div>
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" value="<?php echo $pic['nama_perusahaan']; ?>">
          </div>
          <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi" class="form-control" value="<?php echo $pic['nama_instansi']; ?>">
          </div>
          <div class="form-group">
            <label>Perihal</label>
            <input type="text" name="perihal" class="form-control" value="<?php echo $pic['perihal']; ?>">
          </div>
          <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="form-control" value="<?php echo $pic['tanggal_surat']; ?>">
          </div>
          <div class="form-group">
            <label>No Surat Masuk</label>
            <input type="text" name="no_surat_keluar" class="form-control" value="<?php echo $pic['no_surat_keluar']; ?>">
          </div>

          <div class="form-group">
            <label>file</label>
            <input type="file" name="userfile" class="form-control">
          </div>
          <!-- <img src="<?php echo base_url() . '/gambar/' . $pic['file']; ?>" width="100"> -->
          <iframe src="<?php echo base_url() . '/gambar/' . $pic['file']; ?>" width="200" height="100"></iframe>
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