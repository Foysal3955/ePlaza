<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

//dd($_POST);
/**
 * sanitize 
 * validation 
 * 
 * image processing
 * store : a json file 
 * give apporpriate massge to user  
 */
//$id = "11";
$uuid = $_POST['uuid'];
$id = $_POST['id'];
$src = $_POST['url'];
$alt = $_POST['alt'];
$title = $_POST['title'];
$caption = $_POST['caption'];



 $slide = [

          'id'=>$id,
          'uuid'=>$uuid,
          'src'=>$src,
          'alt'=>$alt,
          'title'=>$title,
          'caption'=>$caption
        ];


$dataSlides = file_get_contents($datasource.'slider.json');
$slides = json_decode($dataSlides);

foreach($slides as $key=>$aslide){
    if($aslide->id == $id)
    break;


}
 
//d($slides);
//d($slide);

$slides [$key] = (object) $slide;

//dd($slides);

$data_slide = json_encode($slides); 
//dd($data_slide);



if(file_exists($datasource."slider.json")){

    $result = file_put_contents($datasource."slider.json",$data_slide);

 }else{
      echo "File not found";
  }

  if($result){
    $message = "Data is  updated Sucessfull";
 
    
    set_session('message',$message);
    

    //redirect("slider_index.php?message=".$message);
    redirect("slider_index.php");

  }