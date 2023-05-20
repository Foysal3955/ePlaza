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
		<!-- <a href="slider_index.php" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round "> -->
	        <!-- <i class="icon-list"></i> -->
<!-- 			 -->
        <!-- </a> -->
        <!-- <a href="slider_index_grid.php" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round "> -->
           <!-- <i class="icon-grid"></i> -->
        <!-- </a> -->
     </ul>
     
     <a href="slider_create.php" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
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
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
                    <th>Title</th>
					<th>Src</th>
					<th>Alt</th>
					<th>Caption</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
    <?php            
            foreach($slides as $key=>$slide):
            // if(0== $key){
            //  $active = 'active';
            //   }
            //  else{
            //   $active = '';
            //  }
  ?>
				<tr>
					<td title = '<?=$slide->id?>'><?=$key+1?></td>
					<td><?=$slide->title?></td>
					<td><img src="<?=$slide->src?>" style = "width:100px;height:100px" ></td>
					<td><?=$slide->alt?></td>
                    <td><?=$slide->caption?></td>
                    <!-- <td> <a href="slider_show.php?slideIndex=<?$key?>">Show</a>  | Edit | Delete | Active/InActive | Copy</td> -->
                    <td> 
					 <a href="slider_show.php?id=<?=$slide->id?>" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	                      <i class="icon-eye"></i>
					
                           </a>
						   <a href="" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	                      <i class="icon-pencil5"></i>
                           </a>
						   <form action ="slider_delete.php" method ="post" class="d-inline-block" >
						   <!-- <a href="slider_delete.php?id=" > -->
	                       <!-- <i class="icon-trash"></i> -->
                           
						   <button type="submit"  class="icon-trash btn-icon rounded-round p-2 btn-outline-primary "></button>
						   <input type="hidden" name="id" value="<?=$slide->id?>" />
						   </form>
						   <a href="" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	                      <i class="icon-blocked"></i>
                           </a>
						   <a href="" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
	                      <i class="icon-files-empty"></i>
                           </a>
					 </td>
				</tr>
<?php
endforeach;
?>

			</tbody>
		</table>
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
