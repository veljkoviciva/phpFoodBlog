<?php //session_start(); 

// var_dump($_SESSION);
// echo isset($_SESSION);  
// echo session_status();
// echo $_SESSION['role'];
?>

<nav class="navbar sticky-top navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/foodBlog.png" height="75px">Food blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="listaRecepata.php"><span style="color: white;">Recepti</span> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novRecept.php"><span style="color: white;">Nov recept
              <i class="bi bi-journal-plus" style="font-size: medium; color: white;"></i></span> </a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" size="40">
        <button class="btn btn-info" type="submit"><i class="bi bi-search" style="font-size: large;"></i> </button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: white;">Prijava</span> <!-- izmeniti kada je sesija aktivna da bude ime korisnika i kuca icon -->
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="color: white; background-color: royalblue;">
            <?php if (!isset($_SESSION)) { ?>
              <li><a class="dropdown-item" href="login.php"><span style="color: white;">Login</span></a></li>
              <li><a class="dropdown-item" href="#"><span style="color: white;">Signup</span></a></li>
            <?php } else { ?>
              <li><a class="dropdown-item" href="home.php"><span style="color: white;">Moji recepti</span></a></li>
              <li><a class="dropdown-item" href="#"><span style="color: white;">Sačuvani recepti</span></a></li>
              <li><a class="dropdown-item" href="profil.php"><span style="color: white;">Profil</span></a></li>
              <li>
                <hr class="dropdown-divider" style="background-color: white;">
              </li>
              <li><a class="dropdown-item" href="php/logout.php"><span style="color: white;">Logout</span></a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>