	<footer id="footer">
			<ul class="icons">
						<?php
									$rezultati = mysqli_query($lidhu, "SELECT * FROM ump_informacionet WHERE Pjesa_Faqes='Fundi_RrjetetSociale'");
									while ($rreshti = mysqli_fetch_assoc($rezultati)) {

									  extract($rreshti);
						  
								  
									if($rezultati==null)
									mysqli_free_result($rezultati);

						?>
						
						<?php echo $Shpjegimi; ?>
						<?php } ?>
			</ul>
			
			<ul class="copyright">
							<?php
							$rezultati = mysqli_query($lidhu, "SELECT * FROM ump_informacionet WHERE Pjesa_Faqes='Fundi_EdrejtaAutoriale'");
							while ($rreshti = mysqli_fetch_assoc($rezultati)) {

							  extract($rreshti);
							  
							  
							if($rezultati==null)
							  mysqli_free_result($rezultati);

							?>
				<?php echo $Shpjegimi; ?>
									
						<?php } ?>
			</ul>
				
			
	</footer>