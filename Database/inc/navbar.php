<?php include('inc/header.php');?>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="index.php">PHP User Account</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL;?>">Home</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL;?>adduser.php">Add User</a>
      </li>
  </div>
</nav>
<?php include('inc/footer.php');?>