<?= $this->extend("template/layout") ?>
<?= $this->section("body") ?>
<div class="row g-2 mb-3">
  <div class="col-12">
    <div class="d-block bg-white rounded shadow p-3">
      <div class="card">
        <h5 class="card-header"><?= $title; ?></h5>
        <div class="card-body">
          <form action="<?= base_url('admin/Penilaian/insert'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="conten-penilaian">
              <div class="titlePenilaian">
                <h3><b>Penilaian Kinerja Guru</b></h3>
              </div>
              <div class="box-penilaian mt-4">
                <div class="keterangan  mb-4">
                  <h5><b>Keterangan Skor</b></h5>
                  <tr>
                    <td>1. Sangat Kurang</td>
                    <br>
                    <td>2. Kurang</td>
                    <br>
                    <td>3. Baik</td>
                    <br>
                    <td>4. Sangat Baik</td>
                  </tr>
                </div>
                <div class="form-nama">
                  <table class="table table-bordered table-light">
                    <tr>
                      <td>Nama :</td>
                      <td>
                        <select name="nama" class="form-control form">
                          <option> -- Pilih Guru -- </option>
                          <?php foreach ($user as $guru) { ?>
                          <option value="<?= $guru['nama_guru']; ?>"><?= $guru['nama_guru']; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Kelas :</td>
                      <td>
                        <select name="kelas" class="form-control form">
                          <option> -- Pilih Kelas -- </option>
                          <option value="II/SLBB: A">II/SLBB: A</option>
                          <option value="II/SLBB: B">II/SLBB: B</option>
                        </select>
                      </td>
                    </tr>
                  </table>
                </div>
                <table class="table table-bordered table-striped">
                  <tr>
                    <td align="center">
                      <label for="">Program</label>
                    </td>
                    <td align="center">
                      <label for="">No</label>
                    </td>
                    <td align="center">
                      <label for="">Komponen Penilaian</label>
                    </td>
                    <td colspan="4" align="center">
                      <label for="">Skor</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Perencanaan Pembelajaran. </label>
                    </td>
                    <td>
                      <label for="">1. </label>
                    </td>
                    <td>
                      <label for="">Menggunakan Kalender Ajaran</label>
                    </td>
                    <td>
                      <input type="radio" name="1" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="1" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="1" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="1" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">2.</label>
                    </td>
                    <td>
                      <label for="">Menyusun Program Tahunan </label>
                    </td>
                    <td>
                      <input type="radio" name="2" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="2" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="2" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="2" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">3.</label>
                    </td>
                    <td>
                      <label for="">Menyusun Program Semester </label>
                    </td>
                    <td>
                      <input type="radio" name="3" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="3" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="3" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="3" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">4.</label>
                    </td>
                    <td>
                      <label for="">Memperbaiki Silabus</label>
                    </td>
                    <td>
                      <input type="radio" name="4" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="4" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="4" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="4" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">5.</label>
                    </td>
                    <td>
                      <label for="">Mengembangkan RPP</label>
                    </td>
                    <td>
                      <input type="radio" name="5" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="5" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="5" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="5" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">6.</label>
                    </td>
                    <td>
                      <label for="">Menetapkan KKM</label>
                    </td>
                    <td>
                      <input type="radio" name="6" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="6" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="6" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="6" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">7.</label>
                    </td>
                    <td>
                      <label for="">Menggunkan Agenda Harian</label>
                    </td>
                    <td>
                      <input type="radio" name="7" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="7" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="7" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="7" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">8.</label>
                    </td>
                    <td>
                      <label for="">Memiliki Jadwal Tetap</label>
                    </td>
                    <td>
                      <input type="radio" name="8" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="8" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="8" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="8" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">9.</label>
                    </td>
                    <td>
                      <label for="">Mengelola Buku Absensi</label>
                    </td>
                    <td>
                      <input type="radio" name="9" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="9" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="9" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="9" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">10.</label>
                    </td>
                    <td>
                      <label for="">Mengelola Buku Nilai</label>
                    </td>
                    <td>
                      <input type="radio" name="10" value="1"> 1
                    </td>
                    <td>
                      <input type="radio" name="10" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="10" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="10" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Pelaksanaan Pembelajaran </label>
                    </td>
                    <td>
                      <label for="">11. </label>
                    </td>
                    <td>
                      <label for="">Mengkondisikan Kelas</label>
                    </td>
                    <td>
                      <input type="radio" name="11" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="11" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="11" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="11" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">12.</label>
                    </td>
                    <td>
                      <label for="">Memfasilitasi Siswa</label>
                    </td>
                    <td>
                      <input type="radio" name="12" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="12" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="12" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="12" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">13.</label>
                    </td>
                    <td>
                      <label for="">Mengembangkan pengalaman
                        mengelaborasi informasi</label>
                    </td>
                    <td>
                      <input type="radio" name="13" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="13" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="13" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="13" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">14.</label>
                    </td>
                    <td>
                      <label for="">Mengembangkan pengalaman belajar
                        mengkonfirmasi informasi</label>
                    </td>
                    <td>
                      <input type="radio" name="14" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="14" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="14" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="14" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">15.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan penilaian proses</label>
                    </td>
                    <td>
                      <input type="radio" name="15" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="15" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="15" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="15" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">16.</label>
                    </td>
                    <td>
                      <label for="">Menilai pengetahuan, karakter,
                        dan keterampilan siswa</label>
                    </td>
                    <td>
                      <input type="radio" name="16" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="16" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="16" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="16" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">17.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan kegiatan refleksi,
                        mengukur pencapaian target</label>
                    </td>
                    <td>
                      <input type="radio" name="17" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="17" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="17" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="17" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Penilaian Hasil Pembelajaran</label>
                    </td>
                    <td>
                      <label for="">18. </label>
                    </td>
                    <td>
                      <label for="">Menggunakan Daftar Nilai
                        sesuai dengan standar penilaian</label>
                    </td>
                    <td>
                      <input type="radio" name="18" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="18" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="18" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="18" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">19.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan tes dalam bentu
                        Ulangan Harian,UTS,UAS/UKK</label>
                    </td>
                    <td>
                      <input type="radio" name="19" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="19" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="19" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="19" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">20.</label>
                    </td>
                    <td>
                      <label for="">Melakukan penilaian Ahlak
                        Mulia dan kepribadian</label>
                    </td>
                    <td>
                      <input type="radio" name="20" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="20" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="20" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="20" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">21.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan penilaian keterampilan siswa</label>
                    </td>
                    <td>
                      <input type="radio" name="21" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="21" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="21" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="21" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">22.</label>
                    </td>
                    <td>
                      <label for="">Menilai kreativitas dan inovasi siswa</label>
                    </td>
                    <td>
                      <input type="radio" name="22" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="22" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="22" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="22" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">23.</label>
                    </td>
                    <td>
                      <label for="">Melakukan Analisis Ulangan Harian</label>
                    </td>
                    <td>
                      <input type="radio" name="23" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="23" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="23" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="23" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">24.</label>
                    </td>
                    <td>
                      <label for="">Remedial dan Pengayaan</label>
                    </td>
                    <td>
                      <input type="radio" name="24" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="24" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="24" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="24" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">25.</label>
                    </td>
                    <td>
                      <label for="">Instrumen tes setiap KD</label>
                    </td>
                    <td>
                      <input type="radio" name="25" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="25" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="25" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="25" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">26.</label>
                    </td>
                    <td>
                      <label for="">Menyusun Bank Soal</label>
                    </td>
                    <td>
                      <input type="radio" name="26" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="26" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="26" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="26" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">27.</label>
                    </td>
                    <td>
                      <label for="">Menggunakan Kartu soal</label>
                    </td>
                    <td>
                      <input type="radio" name="27" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="27" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="27" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="27" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">28.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan Analisis Penilaian</label>
                    </td>
                    <td>
                      <input type="radio" name="28" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="28" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="28" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="28" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Melatih dan Memebimbing</label>
                    </td>
                    <td>
                      <label for="">29. </label>
                    </td>
                    <td>
                      <label for="">Melatih dan membimbing siswa
                        dalam remedial dan pengayaan</label>
                    </td>
                    <td>
                      <input type="radio" name="29" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="29" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="29" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="29" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">30.</label>
                    </td>
                    <td>
                      <label for="">Membimbing siswa meraih target
                        pretasi dalam Kegiatan Ekstra Kurikuler</label>
                    </td>
                    <td>
                      <input type="radio" name="30" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="30" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="30" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="30" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">31.</label>
                    </td>
                    <td>
                      <label for="">Memberikan bimbingan dalam
                        kegiatan Karya Ilmiah Siswa</label>
                    </td>
                    <td>
                      <input type="radio" name="31" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="31" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="31" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="31" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Tugas Tambahan</label>
                    </td>
                    <td>
                      <label for="">32.</label>
                    </td>
                    <td>
                      <label for="">Menjadi Wakil Kepala Sekolah</label>
                    </td>
                    <td>
                      <input type="radio" name="32" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="32" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="32" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="32" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">33.</label>
                    </td>
                    <td>
                      <label for="">Menjadi Wali Kelas</label>
                    </td>
                    <td>
                      <input type="radio" name="33" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="33" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="33" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="33" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">34.</label>
                    </td>
                    <td>
                      <label for="">Menjadi pembina extrakurikuler</label>
                    </td>
                    <td>
                      <input type="radio" name="34" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="34" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="34" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="34" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">35.</label>
                    </td>
                    <td>
                      <label for="">Melaksanakan tugas piket</label>
                    </td>
                    <td>
                      <input type="radio" name="35" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="35" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="35" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="35" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">36.</label>
                    </td>
                    <td>
                      <label for="">Menjadi Pembina Osis</label>
                    </td>
                    <td>
                      <input type="radio" name="36" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="36" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="36" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="36" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for="">Mengembangkan Kegiatan Profesional</label>
                    </td>
                    <td>
                      <label for="">37.</label>
                    </td>
                    <td>
                      <label for="">Melakukan Penelitian Tindakan Kelas</label>
                    </td>
                    <td>
                      <input type="radio" name="37" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="37" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="37" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="37" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">38.</label>
                    </td>
                    <td>
                      <label for="">Mengikuti Pendidikan / Semminar dsb</label>
                    </td>
                    <td>
                      <input type="radio" name="38" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="38" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="38" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="38" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">39.</label>
                    </td>
                    <td>
                      <label for="">Menggunakan Teknologi
                        Infromasi dan Komunikasi</label>
                    </td>
                    <td>
                      <input type="radio" name="39" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="39" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="39" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="39" value="4"> 4
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7"></td>
                  </tr>
                  <tr>
                    <td>
                      <label collrow for=""></label>
                    </td>
                    <td>
                      <label for="">40.</label>
                    </td>
                    <td>
                      <label for="">Meningkatkan Penguasaan Bahasa Asing</label>
                    </td>
                    <td>
                      <input type="radio" name="40" value="1" required> 1
                    </td>
                    <td>
                      <input type="radio" name="40" value="2"> 2
                    </td>
                    <td>
                      <input type="radio" name="40" value="3"> 3
                    </td>
                    <td>
                      <input type="radio" name="40" value="4"> 4
                    </td>
                  </tr>
                </table>
              </div>
              <div class="mt-4" save>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>