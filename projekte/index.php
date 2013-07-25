<?

$num_projects = 4;


?>


<!DOCTYPE HTML>

<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<title>Axel Freudiger &middot; Mediastudent &middot; PROJEKTE</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<script type="text/javascript" src="../js/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="../js/cufon-yui.js"></script>
		<script type="text/javascript" src="../js/DistrictThin_400.font.js"></script>
		<script type="text/javascript" src="../js/reflection.js"></script>
		<script type="text/javascript" src="../js/ugla-slider.js"></script>
		<script>
			Cufon.replace('.navi a, .magi h1');
		</script>	
		<!--[if ie 6]><style type="text/css">@import url("../css/ie6.css");</style><![endif]--> 
	</head>
	
	<body class="projects">
		<!--Rahmen um alle Inhalte der Seite-->
	<div class ="frame"> 
			<!--Spalte für Logo und Navigation-->
			<div class ="magi">
              <!--Spalte f&uuml;r Logo und Navigation-->

              <div class ="logo">
                <!--Logo-->
              <a href="/" title="Axel Freudiger Mediastudent"><h1 class="overhead">Axel Freudiger Mediastudent</h1></a> </div>
			  <!--Ende Logo-->
              <div class ="navi">
                <!--Navigation-->
                <ul>

                  <li> <a href="/">Home</a> </li>
                  <li class="active"> <a href="/projekte/">Projekte</a> </li>
                  <div class="sub">
                  	<?
                  		if (strlen($_GET['p'])){
 							$active[$_GET['p']] = "active";                 			
                  		}
                  		
                  	?>
					<ul id="projectssubmenu">
						<li class="<?=!strlen($_GET['p']) || $_GET['p'] == "1" ? "active" : ""?>"><a class="item-1" href="/projekte/?p=1">eDarling/BetterDate</a></li>
						<li class="<?=$active['2']?>"><a class="item-2" href="/projekte/?p=2">gosee.de</a></li>
						<li class="<?=$active['3']?>"><a class="item-3" href="/projekte/?p=3">langer-blomqvist.de</a></li>
						<li class="<?=$active['4']?>"><a class="item-4" href="/projekte/?p=4">harzi-werbung.de</a></li>
						<li class="<?=$active['5']?>"><a class="item-5" href="/projekte/?p=5">mybeautycase.de</a></li>
					</ul>
                  </div>
                  
                  <li> <a href="/kontakt">Kontakt</a> </li>
                  
                  
                  

                </ul>
                
                  <!--<img alt="UGLA-MEDIA &middot; LOGO" src="../img/ugla.png"/>-->

                <!-- Ende Navi f&uuml;r weniger wichtig Inhalte-->
              </div>
			  <!--Ende Navigation-->
            </div>
			<!--Ende Spalte für Logo und Navigation-->
			
			<!--Inhaltsbereich rechts-->
			<div class ="contentteaser">
            
				<div class="wrapper" id="projects_wrapper">
					
				
					<div id="projects">
						<?if ((strlen($_GET['p']) && $_GET['p'] == "1") || !strlen($_GET['p'])){?>
		
						<div class="container">
						    <?
						        /*
						        include("../classes/Imagetools.php");
    							$imagetools 	= 	new Imagetools();
    							
    							$src			=	("projectpix/project1.jpg");
    							$destination	=	("projectpix/project1_mirror.jpg");
    							$background 	=	array (255, 255, 255);
    						    $gradient   	=	0.2;
    						    $shadow     	=	0.0;
    
    						    if (!file_exists($destination)){
    						    
    								$simg 			=	imagecreatefromjpeg($src);
    
    							    $dimg			=	$imagetools->imagereflection($simg, $background, $gradient, $shadow);
    							    
    							    imagepng($dimg,$destination);
    						    }
    							*/
                  	        ?>
							<table>
								<tr>
									<td>
										<a href="http://itunes.apple.com/de/app/edarling-partnersuche/id493256673?mt=8" target="_blank"><img class="reflect rheight10" src="projectpix/project1.jpg" />	</a>
									</td>
									<td class="top">
										<h3>eDarling/BetterDate (heute: Shop A Man)</h3>
										<a target="_blank" href="http://itunes.apple.com/de/app/edarling-partnersuche/id493256673?mt=8">zur App (iOS)</a>
										<a target="_blank" href="https://play.google.com/store/apps/details?id=net.edarling.mobile">zur App (Android)</a>

										<p>
											Für <a style="padding:0px;" href="http://affinitas.de/" target="_blank">Affinitas</a> war ich mitverantwortlich für die Entwicklung der mobilen Applications für eDarling und betterDate.

										</p>
									</td>
								</tr>
							</table>
							
						</div>
						<?}?>
						<?if ((strlen($_GET['p']) && $_GET['p'] == "2") || !strlen($_GET['p'])){?>
		
						<div class="container">
						    <?

                  	        ?>
							<table>
								<tr>
									<td>
										<a href="http://www.gosee.de/" target="_blank"><img class="reflect rheight10" src="projectpix/project2.jpg" />	</a>
									</td>
									<td class="top">
										<h3>PR-Agentur GoSee (www.gosee.de)</h3>
										<a target="_blank" href="http://www.gosee.de">zur Website</a>
										
										<p>
											In Zusammenarbeit mit der Agentur <a target="_blank" style="padding:0px;" href="http://www.sirup-media.com">sirup°</a> wurde der Relaunch der PR-Agentur GoSee realisiert. Dabei übernahm ich den größten Teil der Backend-Umsetzung. Aber auch Teile des Frontends, wie zum Beispiel der geschlossene Mitgliederbereich wurde von mir umgesetzt.
											
											
										</p>
									</td>
								</tr>
							</table>
							
						</div>
						<?}?>
						<?if ((strlen($_GET['p']) && $_GET['p'] == "3") || !strlen($_GET['p'])){?>
						
						<div class="container">
							<table>
								<tr>
									<td>
										<a href="http://www.langer-blomqvist.de/" target="_blank"><img class="reflect rheight10" src="projectpix/project3.jpg" />	</a>
									</td>
									<td class="top">
										<h3>Buchhandel (www.langer-blomqvist.de)</h3>
										<a target="_blank" href="http://www.langer-blomqvist.de">zur Website</a>
										
										<p>
											Der Webauftritt dieses Buchhandels wurde ebenfalls in Zusammenarbeit mit <a target="_blank" style="padding:0px;" href="http://www.sirup-media.com">sirup°</a> realisiert.
											Dabei gingen meine Aufgaben von Weiterentwicklung des sirup°-internen Content Management System, über Backend-Programmierung, Shopanbindung bis hin zur Frontend-Umsetzung vieler Bereiche der Website.
										</p>
									</td>									
								</tr>
							</table>
							
						</div>
						<?}?>
						<?if ((strlen($_GET['p']) && $_GET['p'] == "4") || !strlen($_GET['p'])){?>
						
						  <div class="container">
							<table>
								<tr>
									<td>
										<a href="http://www.harzi-werbung.de/" target="_blank"><img class="reflect rheight10" src="projectpix/project4.jpg" />	</a>
									</td>
									<td class="top">
										<h3>Werbetechnik Harzendorf (www.harzi-werbung.de)</h3>
										<a target="_blank" href="http://www.harzi-werbung.de/">zur Website</a>
										
										<p>
											Für die Firma Werbetechnik Harzendorf entwarf ich ein Konzept zum Internetauftritt. Außerdem setzte ich die Backend-, sowie Frontend-Programmierung. Die Inhalte lassen sich mühelos über ein Content Management System pflegen.
										</p>
									</td>							
								</tr>
							</table>
							
						</div>
						
						
						<?}?>
						<?if ((strlen($_GET['p']) && $_GET['p'] == "5") || !strlen($_GET['p'])){?>
						<div class="container">
							<table>
								<tr>
									<td>
										<a href="http://www.mybeautycase.de/" target="_blank"><img class="reflect rheight10" src="projectpix/project5.jpg" />	</a>
									</td>
									<td class="top">
										<h3>goFeminin (www.mybeautycase.de)</h3>
										<a target="_blank" href="http://www.mybeautycase.de">zur Website</a>
										  
										<p>
											Die Axel Springer Tochter goFeminin beauftragte die Agentur <a target="_blank" style="padding:0px;" href="http://www.sirup-media.com">sirup°</a> mit der Webkonzeption und ganzheitlichen Umsetzung eines individuellen Produktefinders und Kosmetikguides.
											Mein Aufgabenbereich umfasste hierbei hauptsächlich die Implementierung des sirup°-internen Content Management Systems und die Entwicklung eines Mitgliederbereichs, Backend- sowie Frontend-seitig.
										</p>
									</td>									
								</tr>
							</table>
							
						</div>
						<?}?>
						
					</div>
					
				</div>
				<?
				$rightstart = strlen($_GET['p']) ? $_GET['p'] : 1;
				$left 	= !strlen($_GET['p']) || $_GET['p'] == "1" ? $num_projects : $_GET['p']-1;
				$right 	= $_GET['p'] == $num_projects ? "1" : $rightstart+1;
 				?>
				<div class="slider" style="left:0;">
                    <a id="left" href="?p=<?=$left?>"><i class="icon-arrow-left"></i></a>
                    <a id="right" href="?p=<?=$right?>"><i class="icon-arrow-right"></i></a>
                </div>
				
				

			</div> 
			<!--Ende Inhaltsbereich rechts-->
			
		</div> 
		<!-- Ende Rahmen um alle Inhalte der Seite-->
        <script>
            $(document).ready(function(){
                $("#projects").uglaSlide({
                    left: $("#left"),
                    right: $("#right"),
                    speed: "0.5s",
                });

                $(document).bind("uglaSlide", function(event){

                    var $active = $("#projectssubmenu li.active");
                    if (event.direction == 'left'){

                        if (!$active.prev().length){
                            $('#projectssubmenu li:last').addClass("active");
                        }else {
                            $active.prev().addClass("active");
                        }

                    }else{
                        if (!$active.next().length){
                            $('#projectssubmenu li:first').addClass("active");
                        }else {
                            $active.next().addClass("active");
                        }
                    }
                    $active.removeClass("active");

                    //redraw
                    Cufon.replace('.navi a');
                });

            });

        </script>
        
	</body>

</html>