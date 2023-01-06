<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card">
        <h5 class="card-header"><?= $title; ?></h5>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label label ">Nama</label>
                <input type="text" class="form-control form"
                  value="<?= ($user['nama_guru']) ? $user['nama_guru'] : '' ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Jabatan</label>
                <input type="text" class="form-control form" value="<?= ($user['jabatan']) ? $user['jabatan'] : '' ?>"
                  readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Pendidikan</label>
                <input type="text" class="form-control form"
                  value="<?= ($user['pendidikan']) ? $user['pendidikan'] : ''; ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Tanggal Lahir</label>
                <input type="text" class="form-control form"
                  value="<?= ($user['tgl_lahir']) ? $user['tgl_lahir'] : ''; ?>" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label label ">Username</label>
                <input type="text" class="form-control form"
                  value="<?= ($user['username_guru']) ? $user['username_guru'] : ''; ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Jenis Kelamin</label>
                <input type="text" class="form-control form" value="<?= ($user['jk']) ? $user['jk'] : ''; ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Masa Kerja</label>
                <input type="text" class="form-control form" value="<?= ($user['kerja']) ? $user['kerja'] : ''; ?>"
                  readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Level</label>
                <input type="text" class="form-control form" value="<?= ($user['level']) ? $user['level'] : ''; ?>"
                  readonly>
              </div>
            </div>
          </div>
          <div class="mt-3 save">
            <a href="<?= base_url('admin/guru/edit/' . $user['id_guru']); ?>" class="btn btn-primary"><i
                class="fa fa-edit"></i> Update</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>