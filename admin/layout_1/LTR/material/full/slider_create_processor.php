<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
//dd($_GET);
/**
 * sanitize 
 * validation 
 * 
 * image processing
 * store : a json file 
 * give apporpriate massge to user  
 */
//$id = "11";
//$uuid = "hgsdf";
$src = $_GET['url'];
$alt = $_GET['alt'];
$title = $_GET['title'];
$caption = $_GET['caption'];
 $slide = [
          
          'uuid'=>uniqid(),
          'src'=>$src,
          'alt'=>$alt,
          'title'=>$title,
          'caption'=>$caption
        ];


$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides); 
//finding unique ids 
foreach($slides as $aslide){
  $ids[] = $aslide->id;

}

sort($ids);
$lastIndex = (count($ids)-1);
$highestId = $ids[$lastIndex];
$currentUniqueId = $highestId+1;

$slide['id'] = $currentUniqueId;

$slides [] = (object) $slide;
$data_slide = json_encode($slides); 



if(file_exists($datasource."slider.json")){

    $result = file_put_contents($datasource."slider.json",$data_slide);
    echo "Item is added";
 }else{
      echo "File not found";
  }

?>