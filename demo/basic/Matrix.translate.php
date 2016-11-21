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
	var c1 = svg.paper.circle({
	"cx":"50",
	"cy":"50",
	"r":"40"
	}).attr({
	"fill":"red"
	});;
	var m = new Snap.Matrix();
	c1.animate({
"transform":m.translate(100,100)
	},1000,mina.bounce);
</script>
</body>
</html>
