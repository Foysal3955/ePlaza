<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
/**collet the intended ID */
$id = $_GET['id'];

/**communicate with data source and get the data for that id */

$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);
$slide = null;
foreach($slides as $aslide){
    if($aslide->id == $id){
        $slide = $aslide;
        break;  
    }

}

// $slideIndex = $_GET['slideIndex'];
// $slide = $slides [$slideIndex];
/*
*@TODO
 handle edge case 
 security :Untrust user input 
*/
?>

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









					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?=$slide->src?>" alt="<?=$slide->alt?>">
								<div class="card-img-actions-overlay card-img">
									<!-- <a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white -->
                                    <!-- border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group"> -->
										<!-- <i class="icon-plus3"></i> -->
									<!-- </a> -->
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-eye"></i>
									</a>
                                   <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                   	<i class="icon-pencil"></i>
                                   </a>
                                   
                                   <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
	                                    <i class="icon-trash"></i>
                                   </a>
								</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<h6 class="font-weight-semibold mr-2"><?=$slide->title?></h6>
										<span><?=$slide->caption?></span>
									</div>
									<div class="list-icons list-icons-extended ml-auto">
                                   
                                   </div>
								</div>
							</div>
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
