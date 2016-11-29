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
var cir1 = svg.paper.circle(100,100,90).attr({
	"fill":"red",
	"stroke":"black",
	"stroke-width":"2"
});
var cir2 = svg.paper.circle(150,100,90).attr({
	"fill":"blue",
	"stroke":"black",
	"stroke-width":"2"
});
var btn = svg.paper.rect(75,210,80,40).attr({
	"rx":"5",
	"ry":"5",
	"fill":"green",
});
var onOff = true;
btn.click(function (){
				if(onOff){
	cir1.insertAfter(cir2);
	cir1.animate({
	"r":"40"
	},1000,mina.bounce);
	cir2.animate({
	"r":"90"
	},1000,mina.bounce);
	onOff = false;
				}else{
	cir1.insertBefore(cir2);	
	cir2.animate({
	"r":"40"
	},1000,mina.bounce);
	cir1.animate({
	"r":"90"
	},1000,mina.bounce);
	onOff = true;
				}
})

</script>
</body>
</html>
