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
<rect id="svg_1" width="300" height="300" x="10" y="10" fill="red"></rect>
</svg>
<script src="../../static/snap.svg-min.js"></script>
<script>
var p1 = Snap("#svg_1");
;
fn();
function fn(){
				Snap.animate(0,[45,90],function (value){
								p1.transform(new Snap.Matrix().rotate(value,160,160));
								console.log(value);
				},3000);
};
</script>
</body>
</html>
