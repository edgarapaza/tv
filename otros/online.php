<html>
<head>
</head>
<body>
<div id="alertas">
	<?php include("alertas.php"); ?>
</div>
<script>
	function conn() {
		$("#alertas").load("alertas.php");
	}
	setInterval("conn()", 100);
</script>
</body>
</html>
