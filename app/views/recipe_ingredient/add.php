<div class="container">
<h1 class="text-center">Додавання інгредієнта</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form method="POST" action="/recipeingredient/add">
				<div class="form-group">
					<label for="name">Назва</label>
					<select class="form-select" name="ingredient_id">
                        <option value="">Інгредієнт не вибрано</option>
                        <?php foreach($ingredients as $ingredient): ?>
                        <option value="<?php echo $ingredient["id"]; ?>"><?php echo $ingredient["name"]; ?></option>
                        <?php endforeach; ?>
                    </select>
				</div>
                <input type="hidden" name="recipe_id" value="<?php echo $id; ?>">
				<button type="submit" class="btn btn-primary">Додати</button>
			</form>
		</div>
	</div>
</div>
