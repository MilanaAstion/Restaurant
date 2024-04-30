<div class="container">
	<div class="row">
		<div class="col-6 mx-auto">
            <h1 class="text-center">Редагування страви</h1>
			<form action="/recipe/edit" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Назва</label>
					<input type="text" class="form-control" name="name" value="<?php echo $recipe["name"]; ?>">
				</div>
				<div class="form-group">
					<label for="name">Ціна</label>
					<input type="text" class="form-control" name="price" value="<?php echo $recipe["price"]; ?>">
				</div>
				<div class="form-group">
					<label for="name">Час приготування</label>
					<input type="text" class="form-control" name="cook" value="<?php echo $recipe["cook"]; ?>">
				</div>
				<div class="form-group">
					<label for="name">Вага</label>
					<input type="text" class="form-control" name="weight" value="<?php echo $recipe["weight"]; ?>">
				</div>
				<div class="form-group">
					<label for="description">Опис</label>
					<textarea class="form-control" id="description" rows="3" name="desc"><?php echo $recipe["desc"]; ?></textarea>
				</div>
				<div class="form-group">
					<label for="image">Зображення</label>
					<input type="file" class="form-control-file" id="image" name="img">
				</div>
				<input type="hidden" name="id" value="<?php echo $recipe["id"]; ?>">
				<button type="submit" class="btn btn-primary">Редагувати</button>
			</form>
		</div>
	</div>
</div>
