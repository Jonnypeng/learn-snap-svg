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
	var k = 0;
	var svg = Snap("#svg");
	var rect = svg.paper.path("M0,0 L600,100").attr({"stroke":"black"});
	var rect_subpath = rect.getSubpath(k,k+50);
	console.log(rect_sub);
	var rect_sub = svg.paper.path(rect_subpath).attr({
	"stroke":"red",
		"stroke-width":10
	});
</script>
</body>
</html>
