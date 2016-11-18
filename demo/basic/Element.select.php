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
	<circle id="c1" cx="50" cy="50" r="25" fill="red"></circle>
	<circle id="c2" cx="50" cy="100" r="25" fill="red"></circle>
</svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
	var svg = Snap("#svg");
	svg.select("circle").animate({
"fill":"blue",
"r":"12.5",
"cy":"100"
	},2000,mina.bounce)
	var c1 = Snap("#c1");
	var c2 = Snap("#c2");
	c2.after(c1);
</script>
</body>
</html>
