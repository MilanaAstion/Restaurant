<div class="featured-recipes">
    <h4><?php echo $tag["name"]; ?></h4>
        <!-- recipes list -->
    <div class="recipes-list">
        <?php foreach($recipes as $recipe): ?>
        <!-- single recipe -->
        <a href="/main/single?id=<?php echo $recipe["id"]; ?>" class="recipe">
            <img
                src="/assets/img/recipes/<?php echo $recipe["img"]; ?>"
                class="img recipe-img"
                alt=""
            />
            <h5><?php echo $recipe["name"]; ?></h5>
            <p>Ціна: <?php echo $recipe["price"]; ?> грн</p>
            <p>Час приготування: <?php echo $recipe["cook"]; ?> хв</p>
        </a>
        <!-- end of single recipe -->
        <?php endforeach; ?>
    </div>    
    <!-- end of recipe list -->
</div>
          
