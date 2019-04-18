<?php
include 'layouts/header.php';
?>
<div class="row mt-5">
	<div class="col-lg-6 offset-lg-1 mb-3">
		<div class="card card-upload text-uppercase">
			<div class="card-body">
				<h4 class="card-title">Upload new video</h4>
				<h6 class="card-subtitle mb-3 text-muted"><small>Max 100mb allowed</small></h6>
				<div class="form-group mb-0">
					<span class="form-control">
						<input type="file" class="form-control-file">
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 mb-3">
		<div class="card card-upload text-uppercase">
			<div class="card-body">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-light">uploader</span>
							</div>
							<input type="text" class="form-control" value="Rahul Kumar" disabled>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-light">time/date</span>
							</div>
							<input type="text" class="form-control" value="18.04.2019 14:52" disabled>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-10 offset-lg-1 mb-3">
		<div class="card card-upload text-uppercase">
			<div class="card-body">
				<h4 class="card-title">Video details</h4>
				<div class="form-group">
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-light"><sup style="color:red">*</sup>Title</span>
							</div>
							<input type="text" class="form-control">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-light"><sup style="color:red">*</sup>Category</span>
							</div>
							<select class="custom-select">
								<option selected="">Select Category</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>



						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text bg-light"><sup style="color:red">*</sup>Description</span>
							</div>
							<textarea type="text" class="form-control" rows="3"></textarea>
						</div>
						<button class="btn btn-success btn-block font-weight-bold">UPLOAD</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div> <?php
		include 'layouts/footer.php';
		?>
