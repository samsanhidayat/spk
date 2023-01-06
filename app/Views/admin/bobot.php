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
          </div>
        </div>
        <div class="card-body">
          <p>Keterangan</p>
          <p>*Silahkan ubah bobot, jika sudah tekan tombol ubah bobot kemudian tekan proses <br>
            *Jika tidak ingin mengubah bobot bisa langsung tekan proses</p>
          <form action="<?= base_url('admin/bobot/update/' . (isset($bobot['id_bobot']) ? $bobot['id_bobot'] : '')); ?>"
            method="post">
            <?= csrf_field(); ?>
            <div class="tabel">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Indikator</th>
                    <th>Kode</th>
                    <th>Bobot</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Perancanaan Pembelajaran</td>
                    <td><label for="C1">C1</label></td>
                    <td><input type="number" name="c1" id="C1"
                        class="form-control form <?= ($validation->hasError('c1')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c1', (isset($bobot['c1']) ? $bobot['c1'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c1') ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td>Pelaksanaan Pembelajaran</td>
                    <td><label for="C2">C2</label></td>
                    <td><input type="number" name="c2" id="C2"
                        class="form-control form <?= ($validation->hasError('c2')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c2', (isset($bobot['c2']) ? $bobot['c2'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c2') ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td>Hasil Pembelajaran</td>
                    <td><label for="C3">C3</label></td>
                    <td><input type="number" name="c3" id="C3"
                        class="form-control form <?= ($validation->hasError('c3')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c3', (isset($bobot['c3']) ? $bobot['c3'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c3') ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td>Melatih dan Membimbing</td>
                    <td><label for="C4">C4</label></td>
                    <td><input type="number" name="c4" id="C4"
                        class="form-control form <?= ($validation->hasError('c4')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c4', (isset($bobot['c4']) ? $bobot['c4'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c4') ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td>Tugas Tambahan</td>
                    <td><label for="C5">C5</label></td>
                    <td><input type="number" name="c5" id="C5"
                        class="form-control form <?= ($validation->hasError('c5')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c5', (isset($bobot['c5']) ? $bobot['c5'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c5') ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Pengembangan Kegiatan Profesional</td>
                    <td><label for="C6">C6</label></td>
                    <td><input type="number" name="c6" id="C6"
                        class="form-control form <?= ($validation->hasError('c6')) ? 'is-invalid' : null; ?>"
                        value="<?= old('c6', (isset($bobot['c6']) ? $bobot['c6'] : '')); ?>">
                      <div class="invalid-feedback">
                        <?= $validation->getError('c6') ?>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mt-3 save">
              <a href="<?= base_url('admin/bobot/proses/' . $bobot['id_bobot']); ?>"
                class="btn btn-primary alert_proses"><i class=""> Prosess</i></a>
              <button type="submit" class="btn btn-warning"><i class=""> Ubah Data</i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>