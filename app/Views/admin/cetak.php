<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/app/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/DataTables/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/icons/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('dist/css/index.css'); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title><?= $sub; ?></title>
  <script>
  window.print();
  </script>
</head>

<body>
  <div class="cetak">
    <div class="judulcetak">
      <h3 class="text-center"><?= $title; ?></h3>
    </div>
    <div class="garis_td"></div>
    <div class="alamat">
      <p class="text-center">Jl.Haji Supriyadi RT011/004 Kecamatan Tigaraksa Kabupaten Tangerang Provinsi Banten</p>
    </div>
    <div class="nama-text">
      <pre>
      <p>Semester  : <?= $smt; ?></p>  
      <p class="spasi-nama">Tahun     : <?= $thn; ?></p>  
      </pre>
    </div>
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
    <div class="tabel-pdf">
      <h3 class="text-center"><?= $tema; ?></h3>
      <table class="table table-bordered table-striped">
        <thead align="center">
          <tr>
            <th rowspan="2">NO.</th>
            <th rowspan="2">Nama</th>
            <th colspan="6">Nilai</th>
            <th colspan="2">Perhitungan</th>
          </tr>
          <tr>
            <th>Perencanaan Pembelajaran</th>
            <th>Pelaksanaan Pembelajaran</th>
            <th>Penilaian Hasil Pembelajaran</th>
            <th>Melatih dan Membimbing</th>
            <th>Tugas Tambahan</th>
            <th>Pengembangan Kegiatan</th>
            <th>vektor S</th>
            <th>vektor V</th>
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
      <h5 class="card-header text-center">Hasil Kesimpulan</h5>
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

  <script src="<?= base_url('dist/js/jquery.js'); ?>"></script>
  <script src="<?= base_url('assets/app/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('dist/js/index.js'); ?>"></script>
  <script src="<?= base_url('assets/DataTables/js/jquery.dataTables.min.js'); ?>"></script>
</body>

</html>