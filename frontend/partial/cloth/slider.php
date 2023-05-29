<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'frontend/configF.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eplaza | Online shopping center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> -->
    <link rel="stylesheet" href="../portal/public/css/sidenav.css">
</head>

<body>

<?php
    $strSliderData = file_get_contents($datasource.'cloth/slider.json');
    $arrSliderData = json_decode($strSliderData);
    // dd($arrSliderData);
?>


    <div id="carouselExampleCaptions3" class="carousel slide" style="margin: 3% 21%; width:61%;">
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
            <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="<?=$key?>" class="<?=$active?>" aria-current="true" aria-label="Slide 1"></button>
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
                    <img src="<?=$slide->src?>" style="width: 100%; height: 300px;" class="d-block" alt="<?=$slide->alt?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?=$slide->title?></h5>
                        <p><?=$slide->caption?></p>
                    </div>
                </div>
            <?php
            endforeach
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>