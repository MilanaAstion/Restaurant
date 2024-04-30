<div class="container">
<h1 class="text-center">Редагування інгредієнта</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/ingredient/edit?recipe_id=<?php echo $ingredient["recipe_id"]; ?>" method="POST">
				<div class="form-group">
					<label for="name">Назва</label>
					<input type="text" class="form-control" name="name" value="<?php echo $ingredient["name"]; ?>">
                    <input type="hidden" name="id" value="<?php echo $ingredient["id"]; ?>">
				</div>
				<button type="submit" class="btn btn-primary">Редагувати</button>
			</form>
		</div>
	</div>
</div>
