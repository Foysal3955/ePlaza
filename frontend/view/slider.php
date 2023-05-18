<?php
// $slider1 =[
    //  'src'=>'../view/Samsung/Samsung-Galaxy-S23-Ultra.jpg',
    //  'alt'=>'Slider 1 alter',
    //  'title'=>'Frist slide label',
    //  'caption'=>'Some representative placeholder content for the first slide.'
// ];
// $slider2 =[
    // 'src'=>'../view/Samsung/Samsung-Galaxy-Z-Flip4.jpg',
    // 'alt'=>'Slider 2 alter',
    // 'title'=>'Second slide label',
    // 'caption'=>'Some representative placeholder content for the secound slide.'
// ];
// $slider3 =[
    // 'src'=>'../view/Samsung/Samsung-Galaxy-A73-5G.jpg',
    // 'alt'=>'Slider 3 alter',
    // 'title'=>'Third slide label',
    // 'caption'=>'Some representative placeholder content for the third slide.'
// ];
// $slider4 =[
    // 'src'=>'',
    // 'alt'=>'Slider 4 alter',
    // 'title'=>'Fourth slide label',
    // 'caption'=>'Some representative placeholder content for the fourth slide.'
// ];
// 
// 
// $slides = [$slider1,$slider2,$slider3];

$jsonString = '../datasourcefrontend/slideritems.json';
$dataSlides = file_get_contents($jsonString);
$slides = json_decode($dataSlides);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">


<?php
      $active = '';
      foreach($slides as $key=>$slide):
        if(0== $key){
            $active = 'active';
        }
        else{
            $active = '';
        }
      


?>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$key?>" class="<?=$active?>" aria-current="true" aria-label="Slide 1"></button>
    <?php
    endforeach
       
    ?>
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>  -->
  </div>
  <div class="carousel-inner">

  <?php
      $active = '';
      foreach($slides as $key=>$slide):
        if(0== $key){
            $active = 'active';
        }
        else{
            $active = '';
        }
      
?>
    <div class="carousel-item <?=$active?>">
      
      
      
      
      
      <img src="<?=$slide->src?>" class="d-block w-100" alt="<?=$slide->alt?>">
        <div class="carousel-caption d-none d-md-block">
        <h5><?=$slide->title?></h5>
        <p><?=$slide->caption?></p>
        </div>
    </div>
<?php
 endforeach
?>

    <!-- <div class="carousel-item"> -->
      <!-- <img src="../view/Samsung/Samsung-Galaxy-Z-Flip4.jpg" class="d-block w-100" alt="..."> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <h5>Second slide label</h5> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="carousel-item"<> -->
      <!-- <img src="../view/Samsung/Samsung-Galaxy-A73-5G.jpg" class="d-block w-100" alt="..."> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <h5>Third slide label</h5> -->
        <!-- <p>Some representative placeholder content for the third slide.</p> -->
      <!-- </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>