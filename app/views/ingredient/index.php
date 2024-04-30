<?php $num = 1; ?>
<div class="container">
<h1 class="text-center">Інгредієнти</h1>
	<a href="/ingredient/add" class="btn btn-primary mb-3" role="button">Додати інгредієнт</a>
	
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
			<th><?php echo $num++; ?></th>
			<td><?php echo $ingredient["name"]; ?></td>
			<td>
				<a href="/ingredient/delete?id=<?php echo $ingredient["id"]; ?>" class="btn-sm btn-danger">Видалити</a>
				<a href="/ingredient/edit?id=<?php echo $ingredient["id"]; ?>" class="btn-sm btn-primary">Редагувати</a>
			</td>
		</tr>
        <?php endforeach; ?>
		</tbody>
	</table>
</div>