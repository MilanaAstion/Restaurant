<div class="tab-pane fade show active" id="info">
	<h2 class="text-center">Інформація про страву</h2>
	<a href="/recipe/edit?id=<?php echo($recipe["id"]); ?>" class="btn btn-sm btn-primary mb-3">Редагувати</a>
    <table class="table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<th scope="col">№</th>
				<th scope="col">Назва</th>
				<th scope="col">Значення</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>1</th>
				<th>Назва</th>
				<td><?php echo $recipe["name"]; ?></td>
			</tr>
			<tr>
				<th>2</th>
				<th>Опис</th>
				<td><?php echo $recipe["desc"]; ?></td>
			</tr>
			<tr>
				<th>3</th>
				<th>Зображення</th>
				<td>
					<img src="../assets/img/recipes/<?php echo $recipe["img"]; ?>" height="100px">
				</td>
			</tr>
			<tr>
				<th>4</th>
				<th>Ціна</th>
				<td><?php echo $recipe["price"]; ?> грн</td>
			</tr>
			<tr>
				<th>5</th>
				<th>Час приготування</th>
				<td><?php echo $recipe["cook"]; ?> хв</td>
			</tr>
			<tr>
				<th>6</th>
				<th>Вага</th>
				<td><?php echo $recipe["weight"]; ?> г</td>
			</tr>
		</tbody>
	</table>
</div>