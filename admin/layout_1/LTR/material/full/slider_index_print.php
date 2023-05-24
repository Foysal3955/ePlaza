<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);
//dd($slides);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>All Slider</h1>
<table border="1">
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
			<td title = "<?=$slide->id?>"><?=$key+1?></td>
			<td><?=$slide->title?></td>
			<!-- <td><img src="<?=$slide->src?>" style = "width:100px;height:100px" ></td> -->
			<td><img src= <?= $webroot."upload/".$slide->src?> style = "width:100px;height:90px" ></td>
			<td><?=$slide->alt?></td>
			<td><?=$slide->caption?></td>
			<!-- <td> <a href="slider_show.php?slideIndex=<?$key?>">Show</a>  | Edit | Delete | Active/InActive | Copy</td> -->
			<td> 
				<!-- view -->
			 <a href="slider_show.php?id=<?=$slide->id?>" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
				  <i class="icon-eye"></i>

				   </a>

				 <!--edit  -->
				   <a href="slider_edit.php?id=<?=$slide->id?>" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
				  <i class="icon-pencil5"></i>
				   </a>
				   <!-- delete -->
				   <form action ="slider_delete.php" method ="post" class="d-inline-block" >
				   <!-- <a href="slider_delete.php?id=" > -->
				   <!-- <i class="icon-trash"></i> -->
				   
				   <button type="submit"  class="icon-trash btn-icon rounded-round p-2 btn-outline-primary "></button>
				   <input type="hidden" name="id" value="<?=$slide->id?>" />
				   </form>
				   <!-- active /inactive -->
				   <a href="" class="btn btn-outline bg-blue text-black border-solid border-1 btn-icon rounded-round ">
				  <i class="icon-blocked"></i>
				   </a>

				  <!--copy  -->

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
</body>
</html>