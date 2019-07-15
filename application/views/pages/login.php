<?php if (isset($_SESSION['succes'])) {
  echo $_SESSION['succes'];
} ?>
<?php if(isset($errors)){
    echo $errors;
} ?>
<form class="form-signin" action="<?php echo base_url(); ?>auth/login" method="POST">
  <div class="form-label-group">
    <label for="inputUserame">Username</label>
    <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username"  autofocus>
  </div>
  <hr>
  <div class="form-label-group">
    <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
  </div>
  <hr>
  <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login">Sign In</button>
  <a class="d-block text-center mt-2 small" href="<?php echo base_url(); ?>register">Register</a>
</form>
