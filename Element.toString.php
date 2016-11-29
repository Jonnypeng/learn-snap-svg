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
	<rect id="r1" x="5" y="5" width="100" height="50" fill="red" stroke="black" stroke-width="1"></rect>
</svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
var r1 = Snap("#r1");	
console.log(r1.toString());
</script>
</body>
</html>
