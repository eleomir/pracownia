<?php 
include 'header.php';

$t = isset($_GET["t"]) ? $_GET["t"] : "";
?>
	<div id="page">
		<div id="content"><div class="inner_copy"></div>
		<?php 
			if     ($t=="about")    include "about.php";
			elseif ($t=="off")      include "off.php";
			elseif ($t=="cont")     include "cont.php";
			elseif ($t=="prc")      include "prc.php";
			elseif ($t=="training") include "training.php";
			else 							include "main.php";
		?>
		</div>
		<!-- end content -->
<?php
	//	include 'sidebar.php';
?>
		<div style="clear:both;">&nbsp;</div>
	</div>
<?php
	include 'footer.php';
?>
