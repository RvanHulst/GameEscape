<?php if (isset($_SESSION['succes'])) {
  echo $_SESSION['succes'];
} ?>
<?php if(isset($errors)){
    echo $errors;
} ?>
<form class="form-signin" action="<?php echo base_url(); ?>auth/register" method="POST">
  <div class="form-label-group">
    <label for="inputUserame">Username</label>
    <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username"  autofocus>
  </div>
  <hr>
  <div class="form-label-group">
    <label for="inputEmail">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" >
  </div>
  <hr>
  <div class="form-label-group">
    <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
  </div>
  <hr>
  <div class="form-label-group">
    <label for="inputPassword">Confirm password</label>
    <input type="password" id="inputPassword" name="password2" class="form-control" placeholder="Confirm password">
  </div>
  <hr>
  <button class="btn btn-lg btn-primary btn-block text-uppercase" name="register">Register</button>
  <a class="d-block text-center mt-2 small" href="<?php echo base_url(); ?>login">Sign In</a>
</form>
