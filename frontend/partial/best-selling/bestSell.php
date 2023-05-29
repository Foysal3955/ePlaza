<?php
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'frontend/configF.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eplaza | Online shopping center</title>
</head>

<body>

<?php
    $strProductData = file_get_contents($datasource.'best-selling/bestSell.json');
    $arrProductData = json_decode($strProductData);
    // dd($arrSliderData);
?>



                <div class="row" style="width: 15%; margin-left:80%; margin-top:1.5%; position:fixed;">  
                    <h5>Best Selling</h5>
                        <?php
                            foreach($arrProductData as $key=>$slide):
                        ?>                 
                                            <div style="margin: 2px; display:flex;">
                                                <div  style="margin-right: 5px">
                                                    <img src="<?=$slide->src?>" width="36" height="36" alt="<?=$slide->alt?>">
                                                </div>
                                                <div style="margin-left: 2px">
                                                    <a href="#"><?=$slide->title?></a>
                                                    <p class="text-danger"><?=$slide->price?></p>
                                                </div>
                                            </div>
                        <?php
                            endforeach
                        ?>
				</div>
</body>
</html>