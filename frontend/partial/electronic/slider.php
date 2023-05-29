<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'frontend/configF.php');
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

        <?php
            $strSliderData = file_get_contents($datasource.'electronic/slider.json');
            $arrSliderData = json_decode($strSliderData);
            // dd($arrSliderData);
        ?>
        <div class="container">
            
        </div>


        <div id="carouselExampleCaptions1" class="carousel slide" style="margin: 3% 21%; width:61%;">
            <div class="carousel-indicators">
                <?php

                    $active = '';
                    foreach($arrSliderData as $key=>$slide):
                    if(0== $key){
                        $active = 'active';
                    }
                    else{
                        $active = '';
                    }
                    // dd($slide);

                ?>
                <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="<?=$key?>" class="<?=$active?>" aria-current="true" aria-label="Slide 1"></button>
                <?php
                    endforeach
                ?>
            </div>
        
        
            <div class="carousel-inner">
                <?php
                    $active = '';
                    foreach($arrSliderData as $key=>$slide):
                    if(0== $key){
                        $active = 'active';
                    }
                    else{
                        $active = '';
                    }

                ?>
                    <div class="carousel-item <?=$active?>">
                        <img src="<?=$slide->src?>" style="width: 100%; height: 300px; display-block;" alt="<?=$slide->alt?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?=$slide->title?></h5>
                            <p><?=$slide->caption?></p>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>