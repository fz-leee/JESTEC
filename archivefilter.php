<?php include('head.php'); ?>

<body class="bg-dark">
	<div class="card position-fixed" style="width: 18rem; height: 30rem">
		<div class="card-body">
			<h5 class="card-title">Filter publications by:</h5>
			<hr>
			<form>
				<div class="form-group">
				    <label for="categories">Category</label>
				    <select class="form-control mb-2" id="categories">
				      <option value="" selected disabled>Select category</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				      <option>5</option>
				    </select>
				    <select class="form-control" id="subcategories">
				      <option value="" selected disabled>Select sub-category</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				      <option>5</option>
				    </select>
				</div>

				<div class="form-group">
					<label for="filters">Filters</label>
					<div class="form-check" id="filters">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Default checkbox
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Default checkbox
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Default checkbox
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Default checkbox
					  </label>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>