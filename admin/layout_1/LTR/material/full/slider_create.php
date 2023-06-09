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
			                	<form action="slider_create_processor.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Title:</label>
										<input name="title" type="text" class="form-control" placeholder="Write a title here">
									</div>

									<div class="form-group">
										<label>Caption:</label>
										<input name="caption" type="text" class="form-control" placeholder="Write a caption here">
									</div>

									<div class="form-group">
										<label>Alt:</label>
										<input name="alt"type="text" class="form-control" placeholder="Write Alt here"></input>
									</div>
                                    <div class="form-group">
	                                    <label>URL:</label>
                                        <input name="url" type="url" class="form-control" placeholder="Enter a valid URL">
                                    </div>
                                    <div class="form-group">
	                                    <label>Upload a picture:</label>
	                                    <input name="picture" type="file" class="form-control" placeholder="Picture">
										<!-- <input name="document" type="file" class="form-control" placeholder="Picture"> -->
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

