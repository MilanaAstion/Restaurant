 <!-- header -->
 <header class="hero">
    <div class="hero-container">
        <div class="hero-text">
            <h1>Ресторан неповторних вражень</h1>
            <h4>Смак, який пам'ятається, момент, який насолоджує</h4>
        </div>
    </div>
</header>
<!-- end of header -->
<section class="recipes-container">
    <!-- tag container -->
    <div class="tags-container">
        <h4>Розділи</h4>
        <div class="tags-list">
            <?php foreach($tags as $tag): ?>
                    <a href="/main/tag?id=<?=$tag['id']?> ">
                        <?=$tag['name']?> 
                    </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end of tag container -->
    <!-- recipes list -->
    <div class="recipes-list">
        <?php  foreach($recipes as $recipe): ?>
        <!-- single recipe -->
        <a href="/main/single?id=<?=$recipe['id']?>" class="recipe">
        <img
            src="../assets/img/recipes/<?=$recipe['img']?>"
            class="img recipe-img"
            alt=""
        />
        <h5><?=$recipe['name']?></h5>
        <p> Час приготування : <?=$recipe['cook']?> хв</p>
        <p> Вага : <?=$recipe['weight']?> г</p>
        <p> Ціна : <?=$recipe['price']?> грн</p>
        </a>
        <!-- end of single recipe -->
        <?php endforeach; ?>
    </div>
</section>