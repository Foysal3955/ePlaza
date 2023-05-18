<?php 
    $strNavData = file_get_contents($datasource.'navitem.json');

    $arrNavData = json_decode($strNavData);
    //dd($arrNavData[0]);



    // $navgroups = ['Main','Forms','Components','Layout', 'Data Visualization','Extension','Table','Page Kits'];
    // $mainnavitems = ['Dashboard','Layouts','Themes','Starter Kits','Change Log',' RTL version'];
    // $formitem = ['Form Components','JSON Form','Text Editor','Pickers','Form Layout'];
    // $components = ['Basic Components','Content Styling','Extra Components','Color System','Animation','Icons'];
    // $layout = ['Page Layouts','Slidebars','Navbars','Vetical Navigation','Horizontal Navigation','Menu Levels',];
    // $datavisualization = ['Echarts Librery','D3 Library','C3 Library','Google Charts','Maps Intergration'];
    // $extensions = ['Extentions','JQuary UI','File Uploaders','Event Calender','Internationalization',];
    // $tables = ['Basic Tables','Data Tables','Data Tables Extentions','Reaponsive Tables'];
    // $pagekits = ['General Pages','Service Pages','User Pages','Application Pages','Widgets'];
?>

         <!--Main sidebar-->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">




			<!-- Sidebar content -->
			<div class="sidebar-content">

             <?php //include_once($partials."profile.php"); ?>


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion"> 


<?php
 foreach($arrNavData as $navData){
    $key = array_keys(get_object_vars($navData))[0];
     echo '<li class="nav-item-header">
             <div class="text-uppercase font-size-xs line-height-xs">'
             .$key.
             '</div> <i class="icon-menu" title="Main"></i></li>';
 
        foreach($navData->$key as $navitem){
            echo '<li class="nav-item">
            <a href="slider_index.php" class="nav-link active">
                <i class="icon-home4"></i>
                <span>
                    '.$navitem.'
                </span>
            </a>
        </li>';
        }
   }         



 









    // foreach($navgroups as $key=>$navgroup){
        // echo '<li class="nav-item-header">
                // <div class="text-uppercase font-size-xs line-height-xs">'
                // .$key.$navgroup.
                // '</div> <i class="icon-menu" title="Main"></i></li>';
            // if($key === 0){
                // foreach($mainnavitems as $mainnavitem){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$mainnavitem.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 1){
                // foreach($formitem as $formitem){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$formitem.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 2){
                // foreach($components as $components){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$components.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 3){
                // foreach($layout as $layout){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$layout.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 4){
                // foreach($datavisualization as $datavisualization){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$datavisualization.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 5){
                // foreach($extensions as $extensions){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$extensions.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 6){
                // foreach($tables as $tables){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$tables.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
            // if($key === 7){
                // foreach($pagekits as $pagekits){
                    // echo '<li class="nav-item">
                    // <a href="index.html" class="nav-link active">
                        // <i class="icon-home4"></i>
                        // <span>
                            // '.$pagekits.'
                        // </span>
                    // </a>
                // </li>';
                // }
            // }
    // }


?>
					



					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->