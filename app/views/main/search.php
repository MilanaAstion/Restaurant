<h1>Результати пошуку:</h1>
<label class="label-sort">Сортування за ціною:</label>
<select id="sort" class="sort-search">
    <option value="">Не вибрано</option>
    <option value="asc" <?php if($_GET["sort"] == "asc") echo "selected"; ?>>
        Від меншої до більшої
    </option>
    <option value="desc" <?php if($_GET["sort"] == "desc") echo "selected"; ?>>
        Від більшої до меншої
    </option>
</select>

<section class="recipes-container">
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
    <?php if($recipes): ?>
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
        <p>Час приготування : <?=$recipe['cook']?>хв </p>
        <p>Ціна : <?=$recipe['price']?>грн</p>
        </a>
        <!-- end of single recipe -->
        <?php endforeach; ?>
    </div>
    <?php else: ?>
        <h2>За вашим запитом нічого не знайдено.</h2>
    <?php endif; ?>
</section>

<script>
    let sort = document.querySelector("#sort");
    sort.addEventListener("change", sortPrice);
    function sortPrice(){
        let inputSearch = document.querySelector("#search-input");
        let recipe = inputSearch.value;
        location.href= "/main/search?name=" + recipe;
        let value = sort.value;
        if(value){
            location.href = "/main/search?sort=" + value + "&name=" + recipe;

        }
        else{
            location.href = "/main/search&name=" + recipe;
        }
    }
</script>