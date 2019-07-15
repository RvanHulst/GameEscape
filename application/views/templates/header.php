<html>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master.css">
    <script src="<?php echo base_url(); ?>assets/js/master.js"></script>
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
               <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url(); ?>register">Register</a>
             </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  <div class="container">
