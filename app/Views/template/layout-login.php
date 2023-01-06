<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $sub; ?></title>
  <link rel="stylesheet" href="<?= base_url('/assets/app/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/icons/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('/dist/css/index.css'); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="body-login">

  <?= $this->renderSection("body") ?>

  <script src="<?= base_url('/dist/js/jquery.js'); ?>"></script>
  <script src="<?= base_url('/assets/app/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('/dist/js/index.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
  </script>
  <script>
  <?php if (session()->getFlashdata('error1')) { ?>
  Swal.fire({
    icon: 'error',
    title: 'Error Password Salah',
    timer: 3000,
    showConfirmButton: false
  })
  <?php } ?>
  <?php if (session()->getFlashdata('error2')) { ?>
  Swal.fire({
    icon: 'error',
    title: 'Error Akun Tidak Ditemukan',
    timer: 3000,
    showConfirmButton: false
  })
  <?php } ?>
  </script>
</body>

</html>