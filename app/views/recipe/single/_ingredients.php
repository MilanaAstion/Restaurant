<?php $num = 1; ?>
<div class="tab-pane fade" id="ingredients">
    <h2 class="text-center">Інгредієнти</h2>
    <a href="/recipeingredient/add?recipe_id=<?php echo $recipe["id"]; ?>" class="btn btn-primary mb-3" role="button">Додати інгредієнт</a>

    <?php if($ingredients): ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Назва</th>
            <th scope="col">Дії</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($ingredients as $ingredient): ?>
        <tr>
            <th scope="row"><?php echo $num++; ?></th>
            <td><?php echo $ingredient["name"]; ?></td>
            <td>
                <a href="/recipeingredient/delete?id=<?php echo $ingredient["id"]; ?>&recipe_id=<?php echo $recipe["id"]; ?>" class="btn-sm btn-danger">Видалити</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>Інгредієнтів немає у страви</p>
    <?php endif; ?>
</div>