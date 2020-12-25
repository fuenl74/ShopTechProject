<?php
// xx_footer.php - Page Footer
// Written by:  Luis Fuentes, November 2020	

	echo "
		  <table width='$width' align='center' cellpadding='0' cellspacing='0' style='$ftr_style'>\n
		  <tr><td align='center'></span>$footer</td></tr>\n
		  </table>
		
		  </body>
		  <!-- This would get the year in case footer function does not work<span id='year'> --> 
		  <script> 
				document.getElementById('year').innerHTML = new Date().getFullYear(); 
		  </script>";
?>