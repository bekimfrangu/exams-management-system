
					<?php
						$rezultati = mysqli_query($lidhu, "SELECT * FROM ump_informacionet WHERE Pjesa_Faqes='Meny_Administratori'");
						while ($rreshti = mysqli_fetch_assoc($rezultati)) {

						  extract($rreshti);
							 echo $Shpjegimi;
			  
						if($rezultati==null)
						  mysqli_free_result($rezultati);

							}
					?>