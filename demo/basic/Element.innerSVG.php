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
	var svg= Snap("#svg");
	var rect1 = svg.paper.rect(10,10,300,200).attr({
	"fill":"red",
	"stroke":"black",
	"stroke-width":"2"
	});
	rect1.click(function (){
		console.log(svg.innerSVG());	
	});	
	
</script>
</body>
</html>
