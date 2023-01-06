<?= $this->extend("template/layout-login") ?>
<?= $this->section("body") ?>

<div class="container">
  <div class="login">
    <div class="title-login">
      <p>Login</p>
    </div>
    <div class="form-login">
      <form action="<?= base_url('login/proses'); ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
          <label for="Nama" class="form-label label ">Username</label>
          <input type="text" class="form-control form <?= ($validation->hasError('username')) ? 'is-invalid' : null ?>"
            id="floatingInput" name="username" placeholder="username">
          <div class="invalid-feedback">
            <?= $validation->getError('username') ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="Nama" class="form-label label ">Password</label>
          <input type="password"
            class="form-control form <?= ($validation->hasError('password')) ? 'is-invalid' : null ?>"
            id="floatingPassword" name="password" placeholder="Password">
          <div class="invalid-feedback">
            <?= $validation->getError('password') ?>
          </div>
        </div>
        <div class="button-login">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>