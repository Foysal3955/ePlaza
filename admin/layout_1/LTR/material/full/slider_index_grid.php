<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);
//dd($slides);
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

                    <!-- Bordered table -->
<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Slides</h5>
		<div class="header-elements">
			<div class="list-icons">
        		<a class="list-icons-item" data-action="collapse"></a>
        		<a class="list-icons-item" data-action="reload"></a>
        		<a class="list-icons-item" data-action="remove"></a>
        	</div>
    	</div>
	</div>
	<div class="card-body">
    <ul>
     <li class =""> <a href="slider_index_grid.php"> Grid View</a></li>
     <li class =""> <a href="slider_index.php">List View</a></li>
     </ul>

     <a href="#" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
		<i class="icon-plus3"></i>
     </a>
     <a href="#" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	    <i class="icon-trash"></i>
     </a>
     <a href="#" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	    <i class="icon-file-plus2"></i>
      </a>
      <a href="#" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	     <i class="icon-printer2"></i>
      </a>

        
         (Delete | Restore) | Download XL 
		
        
		
		
	</div>
	<div class="table-responsive">
        <div class="row mx-0">

 <?php            
           foreach($slides as $key=>$slide):
           // if(0== $key){
           //  $active = 'active';
           //   }
           //  else{
           //   $active = '';
           //  }
 ?>


					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?=$slide->src?>"style="height:250px" alt="<?=$slide->alt?>">
								<div class="card-img-actions-overlay card-img">
									<!-- <a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white -->
                                     <!-- border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group"> -->
										<!-- <i class="icon-plus3"></i> -->
									<!-- </a> -->

									<a href="slider_show.php?id=<?=$slide->id?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
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
                    <?php
                    endforeach;
                    ?>

				</div>
				<!-- /image grid -->


	
	</div>
</div>
<!-- /bordered table -->





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