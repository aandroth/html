<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function sliderChange(slider_value)
{
	document.getElementById('sliderStatus').innerHTML = slider_value;
}
</script>
</head>
<body>
<input type="range" min="0" max="255" value="0" step="1" onInput="sliderChange(this.value)"/>
<br /> <br />
Slider Value = <span id="sliderStatus">0</span>
</body>
</html>
