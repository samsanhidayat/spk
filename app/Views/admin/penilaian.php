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
              <a href="<?= base_url('admin/penilaian/addnilai'); ?>" class="btn btn-primary"
                style="float: right; ">Tambah
                Nilai <i class="fa fa-plus-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display">
              <thead>
                <tr style="font-size: 15px;">
                  <th>NO.</th>
                  <th>Nama</th>
                  <th>Perencanaan Pembelajaran</th>
                  <th>Pelaksanaan Pembelajaran</th>
                  <th>Penilaian Hasil Pembelajaran</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($nilai as $row) :  ?>
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
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row["nama"]; ?></td>
                  <td><?php echo number_format($kriteria1, 2); ?></td>
                  <td><?php echo number_format($kriteria2, 2); ?></td>
                  <td><?php echo number_format($kriteria3, 2); ?></td>
                  <td class="adm_td">
                    <a href="<?= base_url('admin/penilaian/hapus/' . $row['id_nilai2']); ?>"
                      class="btn btn-danger alert_notif"><i class="fa fa-trash"></i></a>
                    <a href="<?= base_url('admin/penilaian/edit/' . $row['id_nilai2']); ?>"
                      class="btn btn-warning alert_edit"><i class="fa fa-edit"></i></a>
                    <a href="<?= base_url('admin/penilaian/detail/' . $row['id_nilai2']); ?>" class="btn btn-success"><i
                        class="fa fa-eye"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>