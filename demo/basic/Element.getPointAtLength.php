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
var rect1 = svg.paper.path("M0,0 L300,100").attr({"stroke":"black"});
var k = 0;
var pt = rect1.getPointAtLength(k);
var endPt = rect1.getTotalLength();
var cir1 = svg.paper.circle(pt.x,pt.y,5).attr({
	"fill":"red"
});
var animateMotion = setInterval(function (){
	if(k>endPt){
		clearInterval(animateMotion);
		console.log(pt);
	}
pt = rect1.getPointAtLength(k);
cir1.animate({"cx":pt.x,"cy":pt.y},10);
k++;
		console.log(pt);
},5)
</script>
</body>
</html>
