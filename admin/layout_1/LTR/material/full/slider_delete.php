
<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
/**collet the intended ID */
$id = $_POST['id'];
// dd($id);

/**communicate with data source and get the data for that id */

$dataSlides = file_get_contents($datasource.'slider.json' );
$slides = json_decode($dataSlides);


foreach($slides as $key=>$aslide){
    if($aslide->id == $id){
        
        break;  
    }

}
//dd($key);to be deleted
/**
 * option 1 
 * unset($slides[$key]);
 **/
unset($slides[$key]);
//dd(array_values($slides));
$slides = array_values($slides);
$data_slide = json_encode($slides);

 /** option 2 
  *array_splice($slides, $key, 1);
**/

// array_splice($slides, $key, 1); // it re indexes
// dd($slides);
// $data_slide = json_encode($slides);
// 






if(file_exists($datasource."slider.json")){

    $result = file_put_contents($datasource."slider.json",$data_slide);
    if($result){
		header("location:slider_index.php");
	}
 }else{
      echo "File not found";
  }

?>












?>










































