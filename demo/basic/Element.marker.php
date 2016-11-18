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
<svg id="svg" width="100%" height="100%">
</svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
	var svg = Snap("#svg");
	var c1 =svg.paper.circle(5,5,4).attr({
	"fill":"none",
	"stroke":"black",
	"stroke-width":"0.5"
});
	var three = svg.paper.path("M0,0 L5,2.5 L0,5 z").attr({
	"fill":"none",
	"stroke":"black",
	"stroke-width":"0.5"
});

	var m1 = c1.marker(0,0,8,8,5,5),m2 = three.marker(0,0,6,6,0,3);

	var p = svg.paper.path("M10,10 L100,10 V100").attr({
"fill":"none",
	"stroke":"black",
	"stroke-width":"0.5",
	"marker-start":m1,
	"marker-end":m2
	});

</script>
</body>
</html>
