<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страви</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container  mb-3">
   <!-- menu -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Головна</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/recipe/index">Страви</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tag/index">Розділи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ingredient/index">Інгредієнти</a>
            </li>
        </ul>
            </div>
    </nav>
    <!-- end menu -->
	<?php include 'alert.php'; ?>
</div>
    <?php include $template_path; ?>

</body>
</html>