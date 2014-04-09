			<p>
			
			
			
		<div id="leftbox">
			<table>
		<!--		<tr><td><a href="index.php?t=training&trn=1">Spotkania wykładowe</a></td></tr> -->
				<tr><td align="left"><a href="index.php?t=training&trn=2">Szkoła Pamięci Wojakowskich</a></td></tr> 
			</table>
		</div>
			
		<div id="rightbox">

		<?php 
			if     ($_GET["trn"]=="1")    include "training1.php";
			elseif     ($_GET["trn"]=="2")    include "training2.php";
			elseif     ($_GET["trn"]=="3")    include "training3.php";
			elseif     ($_GET["trn"]=="4")    include "training4.php";
			elseif     ($_GET["trn"]=="5")    include "training5.php";
			else                        include "training0.php";
		?>
		</div>
			
			</p>	