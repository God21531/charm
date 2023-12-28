<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/slide.css">
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
<body>
<div class="fadein">
<?php 
// display images from directory
// directory path
$dir = "./images/review/";
 
$scan_dir = scandir($dir);
foreach($scan_dir as $img):
	if(in_array($img,array('.','..')))
	continue;
?>
<img src="<?php echo $dir.$img ?>" class="img-cover" alt="<?php echo $img ?>">
<?php endforeach; ?>
</div>
</body>
</html>