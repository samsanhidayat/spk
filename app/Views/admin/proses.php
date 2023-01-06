<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<?php if ($bobot['c1'] && $bobot['c2'] && $bobot['c3'] && $bobot['c4'] && $bobot['c5'] && $bobot['c6'] != 0) { ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card text-center mb-3">
        <div class="card-header">
          <h5><?= $title; ?></h5>
        </div>
      </div>
      <?php $jumlah = $bobot['c1'] + $bobot['c2'] + $bobot['c3'] + $bobot['c4'] + $bobot['c5'] + $bobot['c6']; ?>
      <div class="card text-center">
        <div class="card-header">
          <b>Langkah 1</b>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Weighted Product 1</th>
                <th>Weighted Product 2</th>
                <th>Weighted Product 3</th>
                <th>Weighted Product 4</th>
                <th>Weighted Product 5</th>
                <th>Weighted Product 6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  $w1 = $bobot['c1'] / $jumlah;
                  $w2 = $bobot['c2'] / $jumlah;
                  $w3 = $bobot['c3'] / $jumlah;
                  $w4 = $bobot['c4'] / $jumlah;
                  $w5 = $bobot['c5'] / $jumlah;
                  $w6 = $bobot['c6'] / $jumlah;
                  ?>
                <td><?php echo number_format($w1, 4); ?></td>
                <td><?php echo number_format($w2, 4); ?></td>
                <td><?php echo number_format($w3, 4); ?></td>
                <td><?php echo number_format($w4, 4); ?></td>
                <td><?php echo number_format($w5, 4); ?></td>
                <td><?php echo number_format($w6, 4); ?></td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="card-footer text-muted">
          <p>Langkah 1 Menentukan tingkat prioritas bobot setiap kriteria</p>
        </div>
      </div>

      <div class="card text-center mt-4 mb-4">
        <div class="card-header">
          <b>Langkah 2</b>
        </div>
        <?php $jumlah = 0; ?>
        <?php foreach ($nilai as $row1) :  ?>

        <?php
            $jumlah_k1 = $row1["k1"] + $row1["k2"] + $row1["k3"] + $row1["k4"] + $row1["k5"] + $row1["k6"] + $row1["k7"] +
              $row1["k8"] + $row1["k9"] + $row1["k10"];
            $kriteria1 = ($jumlah_k1 / 40) * 100;

            $jumlah_k2 = $row1["k11"] + $row1["k12"] + $row1["k13"] + $row1["k14"] + $row1["k15"] + $row1["k16"] + $row1["k17"];
            $kriteria2 = ($jumlah_k2 / 28) * 100;

            $jumlah_k3 = $row1["k18"] + $row1["k19"] + $row1["k20"] + $row1["k21"] + $row1["k22"] + $row1["k23"] + $row1["k24"] +
              $row1["k25"] + $row1["k26"] + $row1["k27"] + $row1["k28"];
            $kriteria3 = ($jumlah_k3 / 44) * 100;

            $jumlah_k4 = $row1["k29"] + $row1["k30"] + $row1["k31"];
            $kriteria4 = ($jumlah_k4 / 12) * 100;

            $jumlah_k5 = $row1["k32"] + $row1["k33"] + $row1["k34"] + $row1["k35"] + $row1["k36"];
            $kriteria5 = ($jumlah_k5 / 20) * 100;

            $jumlah_k6 = $row1["k37"] + $row1["k38"] + $row1["k39"] + $row1["k40"];
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
        <div class="card-body">
          <table align="center" class="table table-bordered table-striped">
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
              <th>Hasil dari <br> vektor S</th>
            </tr>

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
              <td>A<?php echo $i; ?></td>
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

            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>

            <tr>
              <td colspan="8" align="right"> Jumlah </td>
              <td><?php echo number_format($jumlah, 4); ?></td>
            </tr>
          </table>
        </div>
        <div class="card-footer text-muted">
          Langkah 2 menghitung vektor S
        </div>
      </div>

      <div class="card text-center mb-4">
        <div class="card-header">
          <b>Langkah 3</b>
        </div>
        <div class="card-body">
          <table align="center" class="table table-bordered table-striped">
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
              <th>C6</th>
              <th>Hasil dari <br> vektor S</th>
              <th>Hasil dari <br> vektor V</th>
            </tr>
            <?php $j = 0; ?>
            <?php $i = 1; ?>
            <?php foreach ($nilai as $langkah3) :  ?>
            <?php
                $jumlah_k1 = $langkah3["k1"] + $langkah3["k2"] + $langkah3["k3"] + $langkah3["k4"] + $langkah3["k5"] + $langkah3["k6"] + $langkah3["k7"] +
                  $langkah3["k8"] + $langkah3["k9"] + $langkah3["k10"];
                $kriteria1 = ($jumlah_k1 / 40) * 100;

                $jumlah_k2 = $langkah3["k11"] + $langkah3["k12"] + $langkah3["k13"] + $langkah3["k14"] + $langkah3["k15"] + $langkah3["k16"] + $langkah3["k17"];
                $kriteria2 = ($jumlah_k2 / 28) * 100;

                $jumlah_k3 = $langkah3["k18"] + $langkah3["k19"] + $langkah3["k20"] + $langkah3["k21"] + $langkah3["k22"] + $langkah3["k23"] + $langkah3["k24"] +
                  $langkah3["k25"] + $langkah3["k26"] + $langkah3["k27"] + $langkah3["k28"];
                $kriteria3 = ($jumlah_k3 / 44) * 100;

                $jumlah_k4 = $langkah3["k29"] + $langkah3["k30"] + $langkah3["k31"];
                $kriteria4 = ($jumlah_k4 / 12) * 100;

                $jumlah_k5 = $langkah3["k32"] + $langkah3["k33"] + $langkah3["k34"] + $langkah3["k35"] + $langkah3["k36"];
                $kriteria5 = ($jumlah_k5 / 20) * 100;

                $jumlah_k6 = $langkah3["k37"] + $langkah3["k38"] + $langkah3["k39"] + $langkah3["k40"];
                $kriteria6 = ($jumlah_k6 / 16) * 100;
                ?>

            <tr>
              <td>A<?php echo $i; ?></td>
              <td><?php echo $langkah3["nama"]; ?></td>
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
              <?php $urut[] = number_format($kesimpulan, 4) . " " .  " ( " .  $langkah3["nama"] . " ) "; ?>
              <?php $i++; ?>
              <?php $j++ ?>
              <?php endforeach; ?>
            </tr>
            <tr>
              <td colspan="8" align="right"> Jumlah </td>
              <td><?php echo number_format($jumlah, 4); ?></td>
            </tr>
          </table>
        </div>
        <div class="card-footer text-muted">
          Langkah 3 menghitung vektor V
        </div>
      </div>

      <?php rsort($urut); ?>
      <div class="card text-center">
        <div class="card-header">
          <b>Hasil Kesimpulan</b>
        </div>
        <div class="card-body">
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
    </div>
  </div>
</div>
<?php } else { ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="alert alert-danger" role="alert">
        Bobot Tidak Di Ketahui, Silahkan Isi Bobot Terlebih Dahulu <a href="<?= base_url('admin/bobot'); ?>">Back</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?= $this->endSection() ?>