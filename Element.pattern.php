<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
<style>
	body{
	margin:0px;
	}
	svg{
		position:fixed;
		left:0px;
		top:0px;
	}
</style>
</head>
<body>
<svg id="svg" width="100%" height="100%"></svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
	var svg = Snap("#svg");
	var p1 = svg.paper.circle(12.5,12.5,25).attr({
	"stroke":"black",
				"stroke-width":"0.5",	
	}).pattern(0,0,60,60);
	var c1 = svg.paper.rect(0,0,300,300).attr({
		fill:p1
	});;

</script>
</body>
</html>
