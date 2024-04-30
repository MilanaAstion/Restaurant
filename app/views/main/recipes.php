<div class="sort_block">
    <label class="label-sort label-sort1">Сортування за ціною:</label>
    <select id="sort">
        <option value="">Не вибрано</option>
        <option value="asc" <?php if($_GET["sort"] == "asc") echo "selected"; ?>>
            Від меншої до більшої
        </option>
        <option value="desc" <?php if($_GET["sort"] == "desc") echo "selected"; ?>>
            Від більшої до меншої
        </option>
    </select>
    <br>
    <label class="label-sort label-sort2">Сортування за вагою:</label>
    <select id="weight">
        <option value="">Не вибрано</option>
        <option value="asc" <?php if($_GET["weight"] == "asc") echo "selected"; ?>>
            Від меншої до більшої
        </option>
        <option value="desc" <?php if($_GET["weight"] == "desc") echo "selected"; ?>>
            Від більшої до меншої
        </option>
    </select>
</div>

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
        <div class="block_price">
    <label class="label-sort sort-price">Ціна від:</label>
    <input type="text" id="price_min" value="<?php echo $_GET["min"]; ?>">
    <label class="label-sort sort-price">Ціна до:</label>
    <input type="text" id="price_max" value="<?php echo $_GET["max"]; ?>">
    <button id="btn_price" class="btn">Знайти</button>
    </div>

    <label class="label-sort label-sort2">Сортування за інгредієнтом:</label>
    <select id="sort_ingredient">
    <option value="">Не вибрано</option>
        <?php foreach($ingredients as $ingredient): ?>
            <?php if($_GET["ingredient"] == $ingredient["id"]): ?>
                <option selected value="<?php echo $ingredient["id"]; ?>"><?php echo $ingredient["name"]; ?></option>
            <?php else: ?>
                <option value="<?php echo $ingredient["id"]; ?>"><?php echo $ingredient["name"]; ?></option>
            <?php endif; ?>    
        <?php endforeach; ?>
    </select>
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
        <p> Час приготування : <?=$recipe['cook']?>min </p>
        <p> Вага : <?=$recipe['weight']?> г</p>
        <p> Ціна : <?=$recipe['price']?>грн</p>
        </a>
        <!-- end of single recipe -->
        <?php endforeach; ?>
    </div>
</section>

<script>
    let sort = document.querySelector("#sort");
    sort.addEventListener("change", sortPrice);
    function sortPrice(){
        let value = sort.value;
        if(value){
            location.href = "/main/recipes?sort=" + value;
        }
        else{
            location.href = "/main/recipes";
        }
    }

    let btn = document.querySelector("#btn_price");
    btn.addEventListener("click", searchPrice);
    function searchPrice(){
        let min = document.querySelector("#price_min").value;
        let max = document.querySelector("#price_max").value;
        location.href = "/main/recipes?min=" + min + "&max=" + max;
    }

    ///sort weight
    let weight = document.querySelector("#weight");
    weight.addEventListener("change", sortWeight);
    function sortWeight(){
        let value = weight.value;
        if(value){
            location.href = "/main/recipes?weight=" + value;
        }
        else{
            location.href = "/main/recipes";
        }
    }

    // sort ingredient
    let selectIngredient = document.querySelector("#sort_ingredient");
    selectIngredient.addEventListener("change", sortIngredient);
    function sortIngredient(){
        let value = selectIngredient.value;
        if(value){
            location.href = "/main/recipes?ingredient=" + value;
        }
        else{
            location.href = "/main/recipes";
        }
    }
</script>