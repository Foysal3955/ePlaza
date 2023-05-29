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
    $strProductData = file_get_contents($datasource.'electronic/product.json');
    $arrProductData = json_decode($strProductData);
    // dd($arrSliderData);
?>



                <div class="row" style="margin: 2% 13%; width:78%;">  
                <h3 style="width:77%;">Electronics Devices</h3>
                    <?php
                        foreach($arrProductData as $key=>$slide):
                    ?>                 
					<div class="col-sm-6 col-xl-4">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
                                    <img class="card-img img-fluid" src="<?=$slide->src?>" alt="<?=$slide->alt?>" style="height:120px">
                                    <div class="card-img-actions-overlay card-img">
                                        <!-- <a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round legitRipple" data-popup="lightbox" rel="group">
                                            <i class="icon-plus3"></i>
                                        </a> -->

                                        <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2 legitRipple">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<h6 class="font-weight-semibold mr-2"><?=$slide->title?></h6>
										<span><?=$slide->caption?></span> <br>
                                        <a href="#"><button type="button" class="btn btn-sm btn-primary"><?=$slide->price?></button></a> <a href="#"><button type="button" class="btn btn-sm btn-primary ms-1">Add to Card</button></a>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
									</div>
								</div>
							</div>                       
						</div>
					</div>
                    <?php
                        endforeach
                    ?>
				</div>
                



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>