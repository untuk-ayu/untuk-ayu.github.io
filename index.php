<?php
include"pengaturan.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hai, <?php echo $cewe; ?></title>
<audio controls autoplay loop hidden>
<source src="<?php echo $lagu;?>" type="audio/mpeg">
<p>If you can read this, your browser does not support the audio element.</p>
</audio>
<style type="text/css">
@font-face {
	font-family: digit;
	src: url('digital-7_mono.ttf') format("truetype");
}
</style>

<link href="css/default.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/garden.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</head>

<body>

<div id="mainDiv">
	<div id="content">
		<div id="code">
			<span class="comments">/**</span><br />
			<span class="space"/><span class="comments">Today: <?php echo $skrng; ?>,</span><br />
			<span class="space"/><span class="comments">**/</span><br />
			<br/>
			<span class="comments">// Maaf cuma bisa ngasih ini ya,aku gatau harus ngapain </span><br />
			Thank u for being a part of my life, Three words to express my deep feelings to you<br/>
			<strong><font color="lime">I Miss U</font> Babe<font color="red">&hearts;</font></strong><br />
			Im really sorry,coz i can't stop missing u :(
			<br>
			<br>
			At Last,i want to say:<br />
			I Love u Babe ;<br />
		</div>
		<div id="loveHeart">
			<canvas id="garden"></canvas>
			<div id="words">
				<div id="messages">
					Hai <?php echo $cewe; ?>,Cuma mau bilang<br/>
					<b>AKU KANGEN <font color="red">&hearts;</font></b>;
	
				</div>
				<div id="loveu">
					From<br/>
					<div class="signature">- <?php echo $cowo; ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var offsetX = $("#loveHeart").width() / 2;
var offsetY = $("#loveHeart").height() / 2 - 55;
var together = new Date();
together.setFullYear(2018, 12, 15);
together.setHours(20);
together.setMinutes(0);
together.setSeconds(0);
together.setMilliseconds(0);

if (!document.createElement('canvas').getContext) {
	var msg = document.createElement("div");
	msg.id = "errorMsg";
	msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
	document.body.appendChild(msg);
	$("#code").css("display", "none")
	$("#copyright").css("position", "absolute");
	$("#copyright").css("bottom", "10px");
	document.execCommand("stop");
} else {
	setTimeout(function () {
		startHeartAnimation();
	}, 5000);

	timeElapse(together);
	setInterval(function () {
		timeElapse(together);
	}, 500);

	adjustCodePosition();
	$("#code").typewriter();
}
</script>
</body>
</html>
