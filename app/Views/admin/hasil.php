<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card text-center mb-3">
        <div class="card-header">
          <b><?= $title; ?></b>
        </div>
      </div>
      <div class="card text-center">
        <div class="card-header">
          <?php $jumlahBobot = $mhs["c1"] + $mhs["c2"] + $mhs["c3"] + $mhs["c4"] + $mhs["c5"] + $mhs["c6"]; ?>
          <?php
          $w1 = $mhs["c1"] / $jumlahBobot;
          $w2 = $mhs["c2"] / $jumlahBobot;
          $w3 = $mhs["c3"] / $jumlahBobot;
          $w4 = $mhs["c4"] / $jumlahBobot;
          $w5 = $mhs["c5"] / $jumlahBobot;
          $w6 = $mhs["c6"] / $jumlahBobot;
          ?>

          <?php $jumlah = 0; ?>
          <?php foreach ($nilai as $langkah1) :  ?>
          <?php
            $jumlah_k1 = $langkah1["k1"] + $langkah1["k2"] + $langkah1["k3"] + $langkah1["k4"] + $langkah1["k5"] + $langkah1["k6"] + $langkah1["k7"] +
              $langkah1["k8"] + $langkah1["k9"] + $langkah1["k10"];
            $kriteria1 = ($jumlah_k1 / 40) * 100;

            $jumlah_k2 = $langkah1["k11"] + $langkah1["k12"] + $langkah1["k13"] + $langkah1["k14"] + $langkah1["k15"] + $langkah1["k16"] + $langkah1["k17"];
            $kriteria2 = ($jumlah_k2 / 28) * 100;

            $jumlah_k3 = $langkah1["k18"] + $langkah1["k19"] + $langkah1["k20"] + $langkah1["k21"] + $langkah1["k22"] + $langkah1["k23"] + $langkah1["k24"] +
              $langkah1["k25"] + $langkah1["k26"] + $langkah1["k27"] + $langkah1["k28"];
            $kriteria3 = ($jumlah_k3 / 44) * 100;

            $jumlah_k4 = $langkah1["k29"] + $langkah1["k30"] + $langkah1["k31"];
            $kriteria4 = ($jumlah_k4 / 12) * 100;

            $jumlah_k5 = $langkah1["k32"] + $langkah1["k33"] + $langkah1["k34"] + $langkah1["k35"] + $langkah1["k36"];
            $kriteria5 = ($jumlah_k5 / 20) * 100;

            $jumlah_k6 = $langkah1["k37"] + $langkah1["k38"] + $langkah1["k39"] + $langkah1["k40"];
            $kriteria6 = ($jumlah_k6 / 16) * 100;


            ?>

          <?php $hitung2 =  $kriteria1 ** $w1 *
              $kriteria2 ** $w2 *
              $kriteria3 ** $w3 *
              $kriteria4 ** $w4 *
              $kriteria5 ** $w5 *
              $kriteria6 ** $w6; ?>

          <?php $jumlah += $hitung2; ?>
          <?php endforeach; ?>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead style="font-size:14px ;font-family:'Times New Roman', Times, serif;">
              <tr>
                <th rowspan="2">NO.</th>
                <th rowspan="2">Nama</th>
                <th colspan="6">Nilai</th>
                <th colspan="2">Nilai Perhitungan</th>
              </tr>
              <tr>
                <th>Perencanaan Pembelajaran</th>
                <th>Pelaksanaan Pembelajaran</th>
                <th>Penilaian Hasil Pembelajaran</th>
                <th>Melatih dan Membimbing</th>
                <th>TugasTambahan</th>
                <th>Pengembangan Kegiatan Profesional</th>
                <th>Hasil vektor S</th>
                <th>Hasil vektor V</th>
            </thead>
            <tbody>
              <?php $j = 0; ?>
              <?php $i = 1; ?>
              <?php foreach ($nilai as $langkah2) :  ?>
              <?php
                $jumlah_k1 = $langkah2["k1"] + $langkah2["k2"] + $langkah2["k3"] + $langkah2["k4"] + $langkah2["k5"] + $langkah2["k6"] + $langkah2["k7"] +
                  $langkah2["k8"] + $langkah2["k9"] + $langkah2["k10"];
                $kriteria1 = ($jumlah_k1 / 40) * 100;

                $jumlah_k2 = $langkah2["k11"] + $langkah2["k12"] + $langkah2["k13"] + $langkah2["k14"] + $langkah2["k15"] + $langkah2["k16"] + $langkah2["k17"];
                $kriteria2 = ($jumlah_k2 / 28) * 100;

                $jumlah_k3 = $langkah2["k18"] + $langkah2["k19"] + $langkah2["k20"] + $langkah2["k21"] + $langkah2["k22"] + $langkah2["k23"] + $langkah2["k24"] +
                  $langkah2["k25"] + $langkah2["k26"] + $langkah2["k27"] + $langkah2["k28"];
                $kriteria3 = ($jumlah_k3 / 44) * 100;

                $jumlah_k4 = $langkah2["k29"] + $langkah2["k30"] + $langkah2["k31"];
                $kriteria4 = ($jumlah_k4 / 12) * 100;

                $jumlah_k5 = $langkah2["k32"] + $langkah2["k33"] + $langkah2["k34"] + $langkah2["k35"] + $langkah2["k36"];
                $kriteria5 = ($jumlah_k5 / 20) * 100;

                $jumlah_k6 = $langkah2["k37"] + $langkah2["k38"] + $langkah2["k39"] + $langkah2["k40"];
                $kriteria6 = ($jumlah_k6 / 16) * 100;


                ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $langkah2["nama"]; ?></td>
                <td><?php echo number_format($kriteria1, 2); ?></td>
                <td><?php echo number_format($kriteria2, 2); ?></td>
                <td><?php echo number_format($kriteria3, 2); ?></td>
                <td><?php echo number_format($kriteria4, 2); ?></td>
                <td><?php echo number_format($kriteria5, 2); ?></td>
                <td><?php echo number_format($kriteria6, 2); ?></td>
                <?php $hitung3 =  $kriteria1 ** $w1 *
                    $kriteria2 ** $w2 *
                    $kriteria3 ** $w3 *
                    $kriteria4 ** $w4 *
                    $kriteria5 ** $w5 *
                    $kriteria6 ** $w6; ?>
                <td><?php echo number_format($hitung3, 4); ?></td>
                <?php $kesimpulan = $hitung3 / $jumlah; ?>
                <td> <?php echo number_format($kesimpulan, 4); ?> </td>
                <?php $urut[] = number_format($kesimpulan, 4) . " " .  " ( " .  $langkah2["nama"] . " ) "; ?>
                <?php $i++; ?>
                <?php $j++ ?>
                <?php endforeach; ?>
              </tr>
              <tr>
                <td colspan="8" align="right"> Jumlah </td>
                <td><?php echo number_format($jumlah, 4); ?></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>
      <div class="card mt-3 mb-3">
        <h5 class="card-header text-center">Hasil Kesimpulan</h5>
        <div class="card-body">
          <p>Berikut adalah hasil akhir dari perhitungan Metode Weighted Product</p>
          <table align="center" class="table table-bordered table-striped">

            <tr>
              <th>Peringkat</th>
              <th>Nama dan Hasil Akhir</th>
            </tr>
            <?php $c = 1; ?>
            <?php $jumlah = $j; ?>
            <?php for ($x = 0; $x < $jumlah; $x++) : ?>
            <tr>
              <td><?php echo $c; ?></td>
              <td><?php echo $urut[$x]; ?></td>
            </tr>

            <?php $c++ ?>
            <?php endfor; ?>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <p>*Ubah kedalam format pdf</p>
          <form action="<?= base_url('admin/cetak/print'); ?>" method="post">
            <select class="form-control form mb-2 cari" name="semester" id="" required>
              <option value="">Masukkan Semester</option>
              <option value="Genap">Genap</option>
              <option value="Ganjil">Ganjil</option>
            </select>
            <input type="text" class="form-control form mb-2 cari" name="tahun" placeholder="Masukkan Tahun Ajaran"
              required>
            <div class="mt-2 save">
              <button type="submit" class=" btn btn-danger cari" name="submit"><i class="fa fa-print"></i>
                Print</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
<?= $this->endSection() ?>