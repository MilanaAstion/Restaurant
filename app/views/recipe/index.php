<?php
    $num = 1;
?>
<div class="container">
    <h1 class="text-center">Страви</h1>
	<a href="/recipe/add" class="btn btn-primary mb-3" role="button">Додати страву</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Назва</th>
                <th scope="col">Зображення</th>
                <th scope="col">Ціна</th>
                <th scope="col">Час приготування</th>
                <th scope="col">Вага</th>
                <th scope="col">Дії</th>
            </tr>
		</thead>
		<tbody>
            <?php foreach($recipes as $recipe): ?>
		<tr>
			<th scope="row"><?php echo $num++; ?></th>
			<td>
				<a href="/recipe/single?id=<?php echo($recipe["id"]); ?>"><?php echo($recipe["name"]); ?></a>	
			</td>
			<td><img src="../assets/img/recipes/<?php echo($recipe["img"]); ?>" height="100px"></td>
			<td><?php echo($recipe["price"]); ?> грн</td>
			<td><?php echo($recipe["cook"]); ?> хв</td>
			<td><?php echo($recipe["weight"]); ?> г</td>
			<td>
				<a href="/recipe/delete?id=<?php echo($recipe["id"]); ?>" class="btn-sm btn-danger btn_delete">Видалити</a>
				<br><a href="/recipe/edit?id=<?php echo($recipe["id"]); ?>" class="btn-sm btn-primary">Редагувати</a>
			</td>
		</tr>
        <?php endforeach; ?>
		</tbody>
	</table>
</div>