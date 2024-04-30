<div class="container">
	<div class="row">
		<div class="col-6 mx-auto">
            <h1 class="text-center">Додавання страви</h1>
			<form action="/recipe/add" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Назва</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="name">Ціна</label>
					<input type="text" class="form-control" name="price">
				</div>
				<div class="form-group">
					<label for="name">Час приготування</label>
					<input type="text" class="form-control" name="cook">
				</div>
				<div class="form-group">
					<label for="name">Вага</label>
					<input type="text" class="form-control" name="weight">
				</div>
				<div class="form-group">
					<label for="description">Опис</label>
					<textarea class="form-control" id="description" rows="3" name="desc"></textarea>
				</div>
				<div class="form-group">
					<label for="image">Зображення</label>
					<input type="file" class="form-control-file" id="image" name="img">
				</div>
				<button type="submit" class="btn btn-primary">Додати</button>
			</form>
		</div>
	</div>
</div>
