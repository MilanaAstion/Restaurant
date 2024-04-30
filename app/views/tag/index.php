<?php $num = 1; ?>
<div class="container">
<h1 class="text-center">Розділи</h1>
	<a href="/tag/add" class="btn btn-primary mb-3" role="button">Додати розділ</a>
	
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
			<th><?php echo $num++; ?></th>
			<td><?php echo $tag["name"]; ?></td>
			<td>
				<a href="/tag/delete?id=<?php echo $tag["id"]; ?>" class="btn-sm btn-danger">Видалити</a>
				<a href="/tag/edit?id=<?php echo $tag["id"]; ?>" class="btn-sm btn-primary">Редагувати</a>
			</td>
		</tr>
        <?php endforeach; ?>
		</tbody>
	</table>
</div>