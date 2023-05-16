<?php
 $jsonString = '../datasourcefrontend/mainnavitem.json';
 $strNavData = file_get_contents($jsonString);
 $arrNavData = json_decode($strNavData);

 ?>



  


         <!--Main sidebar-->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">




			<!-- Sidebar content -->
			<div class="sidebar-content">



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
            <a href="index.php" class="">
                <i class="icon-home4"></i>
                <span>
                    '.$navitem.'
                </span>
            </a>
        </li>';
        }
   }         
?>
					



					</ul>
				</div>
				

			</div>
			
		
		</div>


