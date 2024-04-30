<div class="container mt-3">
    <h1 class="text-center"><?php echo $recipe["name"]; ?></h1>
    <!-- nav -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#info">Страва</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tags">Розділи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ingredients">Інгредієнти</a>
        </li>
    </ul>
    
    <!-- content -->
    <div class="tab-content mt-3">
        <!-- info -->
        <?php include "_info.php"; ?>
        <!-- tags -->
        <?php include "_tags.php"; ?>
        <!-- ingredients -->
        <?php include "_ingredients.php"; ?>
    </div>    
</div>