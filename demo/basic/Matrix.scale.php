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
	<rect id="r1" x="10" y="10" fill="blue" width="100" height="100"></rect>
</svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
	var r1 = Snap("#r1");
	var m = new Snap.Matrix();
	//setTimeout(fn,1000);
	//function fn(){
	r1.animate({"transform":m.scale(0.1,0.1,60,60)},1000,mina.bounce);
	//};
</script>
</body>
</html>
