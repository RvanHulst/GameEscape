<html>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="temp-style.css">
    <title>Game Escape</title>
  </head>
  <body>
    <nav class="sticky-top navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>home">GameEscape</a>
        <div class="navbar justify-content-end">
          <ul class="navbar-nav m-auto">
            <li class="nav-item m-auto">
              <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Categories</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" href="<?php echo base_url(); ?>">Products</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
              <div class="input-group-append">
                <button type="button" class="btn btn-secondary btn-number">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <a class="btn btn-sm ml-3 bg-warning" href="<?php echo base_url(); ?>">
              <i class="fa fa-shopping-cart"></i> ShoppingCart
            </a>
            <ul class="navbar-nav m-auto">
             <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url(); ?>">login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" data-toggle="modal" data-target="#registerModal">register</a>
             </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

                        <div class="form-label-group">
                          <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                          <label for="inputConfirmPassword">Confirm password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                        <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
