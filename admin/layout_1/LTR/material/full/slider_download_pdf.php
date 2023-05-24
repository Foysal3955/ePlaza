<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);




$slideHTMLStart =<<<SLIDE


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
			
		</tr>
	</thead>
	<tbody>

SLIDE;


?>
	
<?php   
$slideHTMLContant = null;
$src= null;         
	foreach($slides as $key=>$slide):
		$ser = ++$key;
		$src = $webroot."upload/".$slide->src;


$slideHTMLContant .=<<<TR
<tr>
  <td title ="$slide->uuid">$key</td>
  <td>$slide->title</td>
  <td><img src= "$src" style = "width:100px;height:90px" ></td>
  <td>$slide->alt</td>
  <td>$slide->caption</td>
</tr>
  
TR;
?>
<?php
endforeach;


$slideHTMLEnd = <<<EDF
</tbody>
</table>
</div>
</div>
	
</body>
</html>

EDF;

$slideHTMLList = $slideHTMLStart.$slideHTMLContant.$slideHTMLEnd;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($slideHTMLList);
$mpdf->Output();


?>







