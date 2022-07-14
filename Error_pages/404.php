<html>
<head>
	<title>404 Page</title>
	<link rel="stylesheet" type="text/css" href="/Error_pages/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
</head>
<script>
function centerElement()
{
	var width = document.documentElement.clientWidth;
	var height = document.documentElement.clientHeight;

	var el = $("#error");//element to center
	var elWidth = el.width();
	var elHeight = el.height();
	el.css({
		position: 'absolute',
		top: (height /2) - (elHeight /2),
		left: (width /2) - (elWidth /2),
	});

}
$("document").ready(function () {
	centerElement();
	$(window).resize(function(){
		centerElement();
	});

})
</script>
<?php

$movie = array();
exec('ls ../swf',$movie);
//sleep(0.5);
$list = $movie;
//print_r($movie);

$movie = $movie[rand(0,count($movie))];
if(empty($movie))
{
	$movie = "Mindless.swf";
}
 ?>
<body>
<div id="error">
	<span><?php
	echo str_replace("_"," ",str_replace(".swf","",$movie));?><br> </span>
404
</div>
<div id="movie">
<embed src="/swf/<?php echo $movie; ?>" width="100%" height="95%">
</embed>
</div>
</body>

</html>
