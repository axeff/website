<?
$data	=	$_POST['f'];
if (is_array($data)){
	foreach ($data as $key => $value){
		if (!strlen($value)){
			$error[$key] = "Bitte f&uuml;llen Sie das Feld ".strtoupper($key)." aus.";
		}
	}
	if (!count($error)){
	    $message = "von: ".$data['name']." mit Adresse: ".$data['e-mail']." mit Nachricht: ".$data['nachricht'];
	    mail("axel.freudiger@gmail.com", "ugla-media: ".$data['betreff'], $message);
	    
	    header("Location: ".$_SERVER['REQUEST_URI']."?sendok");
	}
}

?>
<!DOCTYPE HTML>
        
<html>
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Axel Freudiger &middot; Mediastudent &middot; KONTAKT</title>
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<script type="text/javascript" src="../js/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="../js/cufon-yui.js"></script>
		<script type="text/javascript" src="../js/DistrictThin_400.font.js"></script>
		<script>
			Cufon.replace('.navi a, .magi h1');
		</script>
		<!--[if ie 6]><style type="text/css">@import url("../css/ie6.css");</style><![endif]--> 
	</head>
	
	<body>
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
                  <li> <a href="/projekte/">Projekte</a> </li>
                  <li> <a class="active" href="/kontakt/">Kontakt</a> </li>
                  
                  
                  

                </ul>
                <!--<img alt="UGLA" title="UGLA" src="../img/ugla.png"/>-->

                <!-- Ende Navi f&uuml;r weniger wichtig Inhalte-->
              </div>
			  <!--Ende Navigation-->
            </div>
			<!--Ende Spalte für Logo und Navigation-->
			
			<!--Inhaltsbereich rechts-->
			<div class ="contentteaser">
            <div class ="text">
            	<form action="/kontakt/" method="post">
            		<?
            			if (is_array($error)){
            				?>
            				<div class="error">
            					<h3>Es ist ein Fehler aufgetreten!</h3>
            					<?
            						foreach ($error as $key => $value){
            							echo "<p>".$value."</p>";
            						}
            					?>
            				</div>
            				<?
            			}elseif (isset($_GET['sendok'])){
            				?>
            				<div class="error">
            					<h3>Ihre Anfrage wurde versendet.</h3>
            					
            				</div>
            				<?
            			}
            			
            		?>
            		<div id="contact">
						<table cellspacing="0" cellpadding="0" border="0">
						<tbody><tr valign="top">
							<td class="left">Betreff:</td>
							<td><input type="text" class="textfield <?=strlen($error['betreff']) ? "errorfield" : ""?>" value="<?=$data['betreff']?>" name="f[betreff]"></td>
						</tr>
						<tr valign="top">
							<td class="left">Nachricht:</td>
							<td><textarea class="textfield <?=strlen($error['nachricht']) ? "errorfield" : ""?>" name="f[nachricht]"><?=$data['nachricht']?></textarea></td>
						</tr>
						<tr valign="top">
							<td class="left">Name:</td>
							<td><input type="text" class="textfield <?=strlen($error['name']) ? "errorfield" : ""?>" value="<?=$data['name']?>" name="f[name]"></td>
						</tr>
						<tr valign="top">
							<td class="left">E-Mail:</td>
							<td><input type="text" class="textfield <?=strlen($error['e-mail']) ? "errorfield" : ""?>" value="<?=$data['e-mail']?>" name="f[e-mail]"></td>
						</tr>
						</tbody></table>
						<br/><br/>
						<input class="submit" type="image" src="../img/btn_absenden.gif" name="Absenden"/>
					</div>
				</form>
		  </div> 
           
		  <div class ="title"> 
			<h4>Axel Freudiger
				<br/>Richard-Sorge-Str. 58
				<br/>10249 Berlin
				<br/>Tel.: +49 (0)179 911 62 65
			</h4>
		  </div>

				
				
				

		</div> 
			<!--Ende Inhaltsbereich rechts-->
			
	</div> 
		<!-- Ende Rahmen um alle Inhalte der Seite-->

        
</body>

</html>