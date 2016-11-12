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
	var rect1 = svg.paper.rect(10,10,90,90).attr({
	"fill":"red",
	});

	/*rect1.hover(function (){
		this.animate({
		"width":200,
			"height":200
	},500,mina.bounce);
	},function (){
		console.log(rect1.inAnim().anim);
	});*/

	window.onload = function (){
	rect1.animate({
	"width":"300",
	"height":"300"
	},5000,mina.bounce);	
		console.log(rect1.inAnim()[0].anim);
	};

</script>
</body>
</html>
