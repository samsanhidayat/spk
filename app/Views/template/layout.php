<?php

use Kint\Renderer\Renderer;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $sub; ?></title>
  <link rel="stylesheet" href="<?= base_url('/assets/app/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/DataTables/css/jquery.dataTables.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/icons/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/dist/css/index.css'); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

  <div class="wrapper">
    <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
      <div class="container-fluid">
        <button class="btn btn-default" id="btn-slider" type="button">
          <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
        <ul class="nav ms-auto">

          <li class="nav-item dropstart">
            <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown">
              <img src="<?= base_url('/images/user/user.png'); ?>" alt="user" class="img-user">
            </a>
            <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
              <div class="d-flex p-3 border-bottom mb-2">
                <img src="<?= base_url('/images/user/user.png'); ?>" alt="user" class="img-user me-2">
                <div class="d-block">
                  <p class="fw-bold m-0 lh-1"><?= $admin['nama']; ?></p>
                  <small><?= $admin['level']; ?></small>
                </div>
              </div>
              <a class="dropdown-item" href="<?= base_url('admin/home/profile/' . $admin['id_user']); ?>">
                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
              </a>
              <a class="dropdown-item alert_logout" href="<?= base_url('login/logout'); ?>">
                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="slider" id="sliders">
      <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-3">
          <img src="<?= base_url('/images/user/user.png'); ?>" alt="user" class="slider-img-user mb-2">
          <p class="fw-bold mb-0 lh-1 text-white"><?= $admin['nama']; ?></p>
          <small class="text-white"><?= $admin['level']; ?></small>
        </div>
      </div>
      <div class="slider-body px-1">
        <nav class="nav flex-column">
          <ul>
            <li>
              <a class="nav-link px-3 active" href="<?= base_url('admin/home'); ?>">
                <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
              </a>
            </li>
            <hr class="soft my-1 bg-white" />
            <li>
              <a class="nav-link px-3" href="#" id="menu">
                <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Data Master<i id="dropdown"
                  class="fa fa-chevron-right box-icon" aria-hidden="true" style="margin-left: 45px;"></i>
              </a>
              <ul class="list">
                <li>
                  <a class="nav-link px-3" href="<?= base_url('admin/guru'); ?>">
                    <i class="fa fa-user-secret box-icon" aria-hidden="true"></i>Data Guru
                  </a>
                </li>
                <li>
                  <a class="nav-link px-3" href="<?= base_url('admin/penilaian'); ?>">
                    <i class="fa fa-folder box-icon" aria-hidden="true"></i>Penilaian
                  </a>
                </li>
                <li>
                  <a class="nav-link px-3" href="<?= base_url('admin/bobot'); ?>">
                    <i class="fa fa-user box-icon" aria-hidden="true"></i>Bobot & Indikator
                  </a>
                </li>
                <li>
                  <a class="nav-link px-3" href="<?= base_url('admin/cetak'); ?>">
                    <i class="fa fa-book box-icon" aria-hidden="true"></i>Hasil Perhitungan
                  </a>
                </li>
              </ul>
            </li>
            <hr class="soft my-1 bg-white" />
            <li>
              <a class="nav-link px-3 alert_logout" href="<?= base_url('login/logout'); ?>">
                <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="main-pages">
      <div class="container-fluid">

        <?= $this->renderSection("body") ?>

      </div>
    </div>
  </div>

  <div class="slider-background" id="sliders-background"></div>
  <script src="<?= base_url('/dist/js/jquery.js'); ?>"></script>
  <script src="<?= base_url('/assets/app/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('/dist/js/index.js'); ?>"></script>
  <script src="<?= base_url('assets/DataTables/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
  </script>
  <?php if (session()->getFlashdata('success')) { ?>
  <script>
  Swal.fire({
    icon: 'success',
    title: 'Sukses',
    timer: 3000,
    showConfirmButton: false
  })
  </script>
  <?php } ?>
</body>

</html>