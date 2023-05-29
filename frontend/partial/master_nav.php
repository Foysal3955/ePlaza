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

        <!-- header -->
        <?php require_once('../partial/header.php');?>
        <!-- Close header -->

        <!-- Side navbar -->
        <div class="sidenav">
            <?php

                $strSidebarData = file_get_contents($datasource.'sidebar.json');
                $arrSidebarData = json_decode($strSidebarData);
                // dd($arrSidebarData);

                foreach($arrSidebarData as $navData){
                    $key = array_keys(get_object_vars($navData))[0];
                        echo '<li class="nav-item-header" style="list-style:none;">
                            <div class="text-uppercase font-size-xs line-height-xs ms-3 mt-3">'
                            .$key.
                            '</div> <i class="icon-menu" title="Main"></i></li>';
                    
                            foreach($navData->$key as $navitem){
                                    echo '<div class="sidenav_item">
                                            <li class="nav-item">
                                                '.$navitem.'                                                                      
                                            </li>
                                        </div>';
                                }
                }
                
            ?>
        </div>
        <!-- Close Side navbar -->



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>