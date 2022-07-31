
				
				<?php
						$rezultati = mysqli_query($lidhu, "SELECT * FROM ump_informacionet WHERE Pjesa_Faqes='Fillimi'");
						while ($rreshti = mysqli_fetch_assoc($rezultati)) {

						  extract($rreshti);
						  
						  
					if($rezultati==null)
					mysqli_free_result($rezultati);

				?>
			
			<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo $Shenimi ?></h2>
							<p><?php echo $Shpjegimi ?></p>
						</header>
						
					</div>
					
			</section>
				
						
				
		<?php } ?>