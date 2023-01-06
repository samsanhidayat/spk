<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card">
        <h5 class="card-header"><?= $title; ?></h5>
        <div class="card-body">
          <form action="<?= base_url('admin/home/update/' . $admin['id_user']); ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $admin['id_user']; ?>">
            <div class="mb-3">
              <label for="Nama" class="form-label label ">Nama</label>
              <input type="text" name="nama"
                class="form-control form <?= ($validation->hasError('nama')) ? 'is-invalid' : null ?>" id="Nama"
                value="<?= old('nama', ($admin['nama']) ? $admin['nama'] : ''); ?>" placeholder="Masukan Nama Guru">
              <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Username" class="form-label label ">Username</label>
              <input type="text" name="username"
                class="form-control form <?= ($validation->hasError('username')) ? 'is-invalid' : null ?>" id="Username"
                value="<?= old('username', ($admin['username']) ? $admin['username'] : ''); ?>"
                placeholder="Masukan Username Guru">
              <div class="invalid-feedback">
                <?= $validation->getError('username') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Pass" class="form-label label ">Password</label>
              <input type="password" name="password" class="form-control form" id="Pass" value="<?= old('password'); ?>"
                placeholder="Password Minimal 6 Karakter">
            </div>
            <div class="mb-3">
              <label for="Level" class="form-label label ">Level</label>
              <select name="level" id="Level"
                class="form-control form <?= ($validation->hasError('level')) ? 'is-invalid' : null; ?>">
                <option value="">Pilih</option>
                <option value="admin"
                  <?= old('level', ($admin['level']) ? $admin['level'] : '') == 'admin' ? 'selected' : null; ?>>User
                </option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('level') ?>
              </div>
            </div>
            <div class="mt-5 save">
              <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>