<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($partials.'head.php') ?>

<body>

<?php include_once($partials.'nav.php') ?>


	<!-- Page content -->
	<div class="page-content">

	<?php include_once($partials.'sidebar.php') ?>



		<!-- Main content -->
		<div class="content-wrapper">


		<?php include_once($partials.'pageHeader.php') ?>


			<!-- Content area -->
			<div class="content">

			<?php //include_once($partials.'chart.php') ?>



				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-12">
                    <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Create a Slide for the Slider </h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="slider_create_processor.php" method="get">
									<div class="form-group">
										<label>Title:</label>
										<input name="title" type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Caption:</label>
										<input name="caption" type="text" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Alt:</label>
										<textarea name="alt" rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
                                    <div class="form-group">
	                                    <label>URL:</label>
                                        <input name="url" type="text" class="form-control" placeholder="Your strong password">
                                    </div>
                                    <div class="form-group">
	                                    <label>Upload a picture:</label>
	                                    <input name="upload" type="text" class="form-control" placeholder="Your strong password">
                                    </div>

									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light legitRipple">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<?php include_once($partials.'footer.php') ?>


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>

