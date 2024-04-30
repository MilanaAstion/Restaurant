<?php $num = 1; ?>
<div class="tab-pane fade" id="tags">
    <h2 class="text-center">Розділи</h2>
    <a href="/recipetag/add?id=<?php echo $recipe["id"]; ?>" class="btn btn-primary mb-3" role="button">Додати розділ</a> 
    <?php if($tags): ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Назва</th>
                <th scope="col">Дії</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tags as $tag): ?>
            <tr>
                <th scope="row"><?php echo $num++; ?></th>
                <td><?php echo $tag["name"]; ?></td>
                <td>
                    <a href="/recipetag/delete?recipe_id=<?php echo $recipe["id"]; ?>&tag_id=<?php echo $tag["id"]; ?>" class="btn-sm btn-danger">Видалити</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>Тегів немає
        </p>
    <?php endif; ?>
</div>
        