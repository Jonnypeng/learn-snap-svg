<!doctype html>
<html>
<head>
<?php 
	$key = 'Snap.hsb2rgb()';
	include('../_include/header.php'); 
?>
<style>
.dr-json { list-style-type: none; padding-left: 1em; }
.dr-json-key { display: inline-block; width: 55px; margin-right: 10px; }
</style>
</head>

<body>
<?php 
	include('../_include/nav.php'); 
?>

<div id="zxxBody" class="zxx_body">
	<div id="zxxSlide" class="zxx_side">
    	<?php include('../_include/slide.php'); ?>
    </div>
    <div class="zxx_api_detail">
    	<div class="zxx_api_content">
        	<h1 class="zxx_api_h1"><sub>Snap.svg demo之</sub><?php echo $key; ?></h1>
        	<h2>Snap.hsb2rgb(h, s, v)</h2>
        	<p>HSB值转换成RGB对象。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>h</code> 数值。色调。0~1</li>
                <li><code>s</code> 数值。饱和度。0~1</li>
                <li><code>b</code> 数值。亮度值。0~1</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。如下格式的RGB对象：</p>
             <ol class="dr-json"><li>{<ol class="dr-json"><li><span class="dr-json-key"><code>r</code></span>数值。红色。
</li><li><span class="dr-json-key"><code>g</code></span>数值。绿色。
</li><li><span class="dr-json-key"><code>b</code></span>数值。蓝色。
</li><li><span class="dr-json-key"><code>hex</code></span>字符串。十六进制格式颜色值，HTML/CSS使用的格式: <code>#••••••</code>.
</li></ol></li><li>}</li></ol>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
</body>
</html>