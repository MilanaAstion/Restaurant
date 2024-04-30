<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ресторан тд.">
    <meta name="keywords" content="пицца, суши...">
    <title>Culinary Symphony</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="../assets/css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="/" class="nav-logo">
            <img src="../assets/img/logo.png" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="/" class="nav-link"> Головна </a>
          <a href="/main/tags" class="nav-link"> Розділи </a>
          <a href="/main/recipes" class="nav-link"> Меню </a>
          <a href="/user/login" class="nav-link">Адміністратор</a>
          <a href="/main/contact" class="nav-link"> Контакти </a>
          <div class="search">
              <input type="text" id="search-input" value="<?php echo $_GET["name"]; ?>">
              <button id="search-btn" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <!-- main -->
    <main class="page">

        <?php include $template_path; ?>
        
    </main>
    <!-- end of main -->
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Culinary Symphony</span> Built by
        <a href="https://www.johnsmilga.com/">Milana Astion</a>
      </p>
    </footer>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/search.js"></script>
    <script src="https://kit.fontawesome.com/9222919ce2.js" crossorigin="anonymous"></script>
  </body>
</html>

