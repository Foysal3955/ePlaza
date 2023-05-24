<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php


// dd($uploads);

$fileName = uniqid()."_".$_FILES['picture']['name']; // if you want to keep th ename as is 
$target = $_FILES['picture']['tmp_name']; // if you want to keep th ename as is 
$destination = $uploads.$fileName;
$src = null;
if(upload($target, $destination)){
  $src = $fileName;
}

// dd($filename);
// move_uploaded_file($target, $destination);


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
// $src = $_POST['url'];
$alt = $_POST['alt'];
$title = $_POST['title'];
$caption = $_POST['caption'];



 $slide = [
          
          'uuid'=>uniqid(),
          'src'=>$src,
          'alt'=>$alt,
          'title'=>$title,
          'caption'=>$caption
        ];

$currentUniqueId = null;


// dd($slide);

$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);

if(count($slides) > 0){

$ids = [];
//finding unique ids 
foreach($slides as $aslide){
  $ids[] = $aslide->id;

}

  sort($ids);
  $lastIndex = (count($ids)-1);
  $highestId = $ids[$lastIndex];
  $currentUniqueId = $highestId+1;

}else{
  $currentUniqueId = 1;

}




$slide['id'] = $currentUniqueId;


$slides [] = (object) $slide;
$data_slide = json_encode($slides); 



if(file_exists($datasource."slider.json")){

    $result = file_put_contents($datasource."slider.json",$data_slide);

 }else{
      echo "File not found";
  }

  if($result){

    redirect("slider_index.php");

  }