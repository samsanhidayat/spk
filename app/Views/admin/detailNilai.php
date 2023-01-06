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

          <div class="row">
            <?php foreach ($nilai as $row) {  ?>
            <?php
              $jumlah_k1 = $row["k1"] + $row["k2"] + $row["k3"] + $row["k4"] + $row["k5"] + $row["k6"] + $row["k7"] +
                $row["k8"] + $row["k9"] + $row["k10"];
              $kriteria1 = ($jumlah_k1 / 40) * 100;

              $jumlah_k2 = $row["k11"] + $row["k12"] + $row["k13"] + $row["k14"] + $row["k15"] + $row["k16"] + $row["k17"];
              $kriteria2 = ($jumlah_k2 / 28) * 100;

              $jumlah_k3 = $row["k18"] + $row["k19"] + $row["k20"] + $row["k21"] + $row["k22"] + $row["k23"] + $row["k24"] +
                $row["k25"] + $row["k26"] + $row["k27"] + $row["k28"];
              $kriteria3 = ($jumlah_k3 / 44) * 100;

              $jumlah_k4 = $row["k29"] + $row["k30"] + $row["k31"];
              $kriteria4 = ($jumlah_k4 / 12) * 100;

              $jumlah_k5 = $row["k32"] + $row["k33"] + $row["k34"] + $row["k35"] + $row["k36"];
              $kriteria5 = ($jumlah_k5 / 20) * 100;

              $jumlah_k6 = $row["k37"] + $row["k38"] + $row["k39"] + $row["k40"];
              $kriteria6 = ($jumlah_k6 / 16) * 100;


              ?>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label label ">Nama</label>
                <input type="text" class="form-control form" value="<?= ($row['nama']) ? $row['nama'] : '' ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Perencanaan Pembelajaran</label>
                <input type="text" class="form-control form" value="<?= $kriteria1 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Penilaian Hasil Pembelajaran</label>
                <input type="text" class="form-control form" value="<?= $kriteria3 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Tugas Tambahan</label>
                <input type="text" class="form-control form" value="<?= $kriteria5 ?>" readonly>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label label ">kelas</label>
                <input type="text" class="form-control form" value="<?= ($row['kelas']) ? $row['kelas'] : '' ?>"
                  readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Pelaksanaan Pembelajaran</label>
                <input type="text" class="form-control form" value="<?= $kriteria2  ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Melatih dan Membimbing</label>
                <input type="text" class="form-control form" value="<?= $kriteria4 ?>" readonly>
              </div>
              <div class="mb-3">
                <label class="form-label label ">Pengembangan Kegiatan Profesional</label>
                <input type="text" class="form-control form" value="<?= $kriteria6 ?>" readonly>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>