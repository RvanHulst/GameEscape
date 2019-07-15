<div>
  <h1>profile page</h1>

  <?php if (isset($_SESSION['succes'])) {
    echo $_SESSION['succes'];
  } ?>

  <p>Hello, <?php echo $_SESSION['username']; ?></p>
</div>
