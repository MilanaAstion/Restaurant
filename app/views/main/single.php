     <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="../assets/img/recipes/<?=$recipe['img']?>"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><?=$recipe['name']?></h2>
            <p><?=$recipe['desc']?></p>
            <p class="weight">
              Час приготування :
              <?php echo $recipe["cook"]; ?> хв
            </p>
            <p class="weight">
              Вага :
              <?php echo $recipe["weight"]; ?> г
            </p>
            <p class="price">
              Ціна :
              <?php echo $recipe["price"]; ?> грн
            </p>
            <p class="recipe-tags">
              Розділи :
              <?php if($tags): ?>
                <?php foreach($tags as $tag): ?> 
                <a href="/main/tag?id=<?php echo $tag["id"]; ?>"><?php echo $tag["name"]; ?></a>
                <?php endforeach; ?>
              <?php endif; ?>
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article class="second-column">
            <div>
              <h4>Інгредієнти</h4>
              <?php if($ingredients): ?>
                <?php foreach($ingredients as $ingredient): ?> 
                <p class="single-ingredient"><?php echo $ingredient["name"]; ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </article>
        </section>
      </div>
