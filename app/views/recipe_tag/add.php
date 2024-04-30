<div class="container">
<h1 class="text-center">Додавання розділу</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form method="POST" action="/recipetag/add">
				<div class="form-group">
					<label for="name">Назва</label>
					<select class="form-select" name="tag_id">
                        <option value="">Тег не вибрано</option>
                        <?php foreach($tags as $tag): ?>
                        <option value="<?php echo $tag["id"]; ?>"><?php echo $tag["name"]; ?></option>
                        <?php endforeach; ?>
                    </select>
				</div>
                <input type="hidden" name="recipe_id" value="<?php echo $id; ?>">
				<button type="submit" class="btn btn-primary">Додати</button>
			</form>
		</div>
	</div>
</div>
