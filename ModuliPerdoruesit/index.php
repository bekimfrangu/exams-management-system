<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfiguro.php"); ?>
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
					<h1 id="logo"><a href="index.php"></a></h1>
					<?php include_once("meny.php"); ?> 
			</header>
			 
			
			 
			<!-- Banner -->
			
			<?php include_once("fillimi_faqes.php"); ?>
				
					
			
				

			<!-- One -->
				

			<!-- Two -->
				<?php
										$rezultati = mysqli_query($lidhu, "SELECT  ump_profesoret.Emri_Prof, ump_profesoret.Mbiemri_Prof,ump_lendet.Emri_Lenda,
										ump_lendet.Pershkrimi_Lenda, ump_lendet.Foto_Lenda, ump_lendet.Emri_Foto FROM ump_lendet 
										LEFT OUTER JOIN ump_profesoret ON ump_lendet.ID_Profesori = ump_profesoret.ID_Profesori
										GROUP BY ump_profesoret.Emri_Prof,ump_profesoret.Mbiemri_Prof, ump_lendet.Emri_Lenda, ump_lendet.Pershkrimi_Lenda,
										ump_lendet.Foto_Lenda, ump_lendet.Emri_Foto
										ORDER BY ump_profesoret.ID_Profesori, ump_lendet.ID_Profesori DESC");
													while ($rreshti = mysqli_fetch_assoc($rezultati)) {

														  extract($rreshti);
												  
														  
									if($rezultati==null)
									  mysqli_free_result($rezultati);

						?>
				<section id="two" class="spotlight style2 right">
				<span class="image fit main"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rreshti['Foto_Lenda'] ).'" width="100%" height="100%">'; ?></span> 
					<div class="content">		
						
						<header>
							<h2><?php echo $Emri_Lenda?></h2>
							<p><?php echo $Emri_Prof .' '. $Mbiemri_Prof; ?></p>
						</header>
						<p><?php echo $Pershkrimi_Lenda; ?></p>
							
					</div>
					
					
				</section>
			<?php } ?>
			<!-- Four -->
			

			<!-- Five -->
				

			<!-- Footer -->
				
				<?php include_once("fundi_faqes.php"); ?>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>