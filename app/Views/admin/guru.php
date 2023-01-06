<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8">
              <h4><?= $title; ?></h4>
            </div>
            <div class="col-md-4">
              <a href="<?= base_url('admin/guru/addguru'); ?>" class="btn btn-primary" style="float: right; ">Tambah
                Data <i class="fa fa-plus-circle"></i></a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Jabatan</th>
                  <th>Pendidikan</th>
                  <th>Masa Kerja</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($user as $guru) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $guru['nama_guru']; ?></td>
                  <td><?= $guru['jabatan']; ?></td>
                  <td><?= $guru['pendidikan']; ?></td>
                  <td><?= $guru['kerja']; ?></td>
                  <td class="adm_td">
                    <a href="<?= base_url('admin/guru/hapus/' . $guru['id_guru']); ?>"
                      class="btn btn-danger alert_notif"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url('admin/guru/edit/' . $guru['id_guru']); ?>"
                      class="btn btn-warning alert_edit"><i class="fa fa-edit"></i></a>
                    <a href="<?= base_url('admin/guru/detail/' . $guru['id_guru']); ?>" class="btn btn-success"><i
                        class="fa fa-eye"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>