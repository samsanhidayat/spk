<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card">
        <h5 class="card-header"><?= $title; ?></h5>
        <div class="card-body">
          <form action="<?= base_url('admin/guru/update/' . $user['id_guru']); ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $user['id_guru']; ?>">
            <div class="mb-3">
              <label for="Nama" class="form-label label ">Nama</label>
              <input type="text" name="nama"
                class="form-control form <?= ($validation->hasError('nama')) ? 'is-invalid' : null ?>" id="Nama"
                value="<?= old('nama', ($user['nama_guru']) ? $user['nama_guru'] : ''); ?>"
                placeholder="Masukan Nama Guru">
              <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Username" class="form-label label ">Username</label>
              <input type="text" name="username"
                class="form-control form <?= ($validation->hasError('username')) ? 'is-invalid' : null ?>" id="Username"
                value="<?= old('username', ($user['username_guru']) ? $user['username_guru'] : ''); ?>"
                placeholder="Masukan Username Guru">
              <div class="invalid-feedback">
                <?= $validation->getError('username') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Pass" class="form-label label ">Password</label>
              <input type="password" name="password"
                class="form-control form <?= ($validation->hasError('password')) ? 'is-invalid' : null ?>" id="Pass"
                value="<?= old('password'); ?>" placeholder="Password Minimal 6 Karakter">
              <div class="invalid-feedback">
                <?= $validation->getError('password') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Jabatan" class="form-label label ">Jabatan</label>
              <select name="jabatan" id="Jabatan"
                class="form-control form <?= ($validation->hasError('jabatan')) ? 'is-invalid' : null; ?>">
                <option value="">--Pilih Jabatan--</option>
                <option value="Guru"
                  <?= old('jabatan', ($user['jabatan']) ? $user['jabatan'] : '') == 'Guru' ? 'selected' : null ?>>
                  Guru</option>
                <option value="Staf"
                  <?= old('jabatan', ($user['jabatan']) ? $user['jabatan'] : '') == 'Staf' ? 'selected' : null ?>>
                  Staf</option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('jabatan') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Jk" class="form-label label ">Jenis Kelamin</label>
              <select name="jk" id="Jk"
                class="form-control form <?= ($validation->hasError('jk')) ? 'is-invalid' : null; ?>">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Pria" <?= old('jk', ($user['jk']) ? $user['jk'] : '') == 'Pria' ? 'selected' : null ?>>
                  Pria</option>
                <option value="Wanita"
                  <?= old('jk', ($user['jk']) ? $user['jk'] : '') == 'Wanita' ? 'selected' : null ?>>Wanita
                </option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('jk') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Pend" class="form-label label ">Pendidikan</label>
              <select name="pendidikan" id="Pend"
                class="form-control form <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : null; ?>">
                <option value="">--Pilih Pendidikan--</option>
                <option value="SMA"
                  <?= old('pendidikan', ($user['pendidikan']) ? $user['pendidikan'] : '') == 'SMA' ? 'selected' : null ?>>
                  SMA</option>
                <option value="S1"
                  <?= old('pendidikan', ($user['pendidikan']) ? $user['pendidikan'] : '') == 'S1' ? 'selected' : null ?>>
                  S1</option>
                <option value="S2"
                  <?= old('pendidikan', ($user['pendidikan']) ? $user['pendidikan'] : '') == 'S2' ? 'selected' : null ?>>
                  S2</option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('pendidikan') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Kerja" class="form-label label ">Masa Kerja</label>
              <select name="kerja" id="Kerja"
                class="form-control form <?= ($validation->hasError('kerja')) ? 'is-invalid' : null; ?>">
                <option value="">Pilih</option>
                <option value="1 Tahun"
                  <?= old('kerja', ($user['kerja']) ? $user['kerja'] : '') == '1 Tahun' ? 'selected' : null ?>>
                  1 Tahun</option>
                <option value="2 Tahun"
                  <?= old('kerja', ($user['kerja']) ? $user['kerja'] : '') == '2 Tahun' ? 'selected' : null ?>>
                  2 Tahun</option>
                <option value="3 Tahun"
                  <?= old('kerja', ($user['kerja']) ? $user['kerja'] : '') == '3 Tahun' ? 'selected' : null ?>>
                  3 Tahun</option>
                <option value="4 Tahun"
                  <?= old('kerja', ($user['kerja']) ? $user['kerja'] : '') == '4 Tahun' ? 'selected' : null ?>>
                  4 Tahun</option>
                <option value="5 Tahun Lebih"
                  <?= old('kerja', ($user['kerja']) ? $user['kerja'] : '') == '5 Tahun/Lebih' ? 'selected' : null ?>>
                  5 Tahun/Lebih
                </option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('kerja') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Tgl" class="form-label label ">Tanggal Lahir</label>
              <input type="date" name="tgl"
                class="form-control form <?= ($validation->hasError('tgl')) ? 'is-invalid' : null ?>" id="Tgl"
                value="<?= old('tgl', ($user['tgl_lahir']) ? $user['tgl_lahir'] : ''); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('tgl') ?>
              </div>
            </div>
            <div class="mb-3">
              <label for="Level" class="form-label label ">Level</label>
              <select name="level" id="Level"
                class="form-control form <?= ($validation->hasError('level')) ? 'is-invalid' : null; ?>">
                <option value="">Pilih</option>
                <option value="User"
                  <?= old('level', ($user['level']) ? $user['level'] : '') == 'User' ? 'selected' : null; ?>>User
                </option>
              </select>
              <div class="invalid-feedback">
                <?= $validation->getError('level') ?>
              </div>
            </div>
            <div class="mt-5 save">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>