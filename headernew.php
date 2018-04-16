<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Montserrat);
#tfheader{
	background-color:#030321;
	height: 100px;
}

#tfnewsearch{
	padding:20px;
	padding-top: 30px;
}

.tftextinput{
	margin: 4px 0 4px 0;
	padding: 5px 15px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	border:1px solid #0076a3; 
	border-right:0px;
	border-top-left-radius: 5px 5px;
	border-bottom-left-radius: 5px 5px;
	height: 32px;
	width: 400px;
}

.tfbutton {
	margin: 4px 0 4px 0;
	padding: 5px 15px;
	font-family: Arial, Helvetica, sans-serif;
	font-size:14px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	color: #ffffff;
	border: solid 1px #0076a3; 
	border-left:0px;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#191970), to(#B0C4DE));
	background: -moz-linear-gradient(top,  	#191970	,  #B0C4DE);
	border-top-right-radius: 5px 5px;
	border-bottom-right-radius: 5px 5px;
	height: 32px;
	width: 100px;
	color: #CAE1FF;
}

.tfbutton:hover {
	text-decoration: none;
	background: #007ead;
	background: -webkit-gradient(linear, left top, left bottom, from(#191970), to(#6495ed));
	background: -moz-linear-gradient(top,  #191970, #6495ed);
}

/* Fixes submit button height problem in Firefox */
.tfbutton::-moz-focus-inner {
  border: 0;
}

.tfclear{
	clear:both;
}

.wrapper {
	text-align: left;
}

.ccategory {
	height: 32px;
	border-left: 0;
	padding: 5px 15px;
	border-color:#0076a3;
}





svg {
    display: block;
    font: 14.5em 'Montserrat';
    width: ;
    height: ;
    margin-left: 0;
    background: #030321;
    margin-bottom: ;
}

.text-copy {
    fill: none;
    stroke: white;
    stroke-dasharray: 6% 29%;
    stroke-width: 5px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 7.5s infinite linear;
}

.text-copy:nth-child(1){
    stroke: #7986CB;
	animation-delay: -1;
}

.text-copy:nth-child(2){
	stroke: #840037;
	animation-delay: -2s;
}

.text-copy:nth-child(3){
	stroke: #BD0034;
	animation-delay: -3s;
}

.text-copy:nth-child(4){
	stroke: #BD0034;
	animation-delay: -4s;
}

.text-copy:nth-child(5){
	stroke: #FDB731;
	animation-delay: -5s;
}

@keyframes stroke-offset{
	100% {stroke-dashoffset: -35%;}
}
</style>
</head>
	<?php
		error_reporting(0);
		$categories=array("mobile", "laptop", "tablet", "tv", "camera", "electronics", "personal", "health");
		$mobiles=array("Xiaomi", "Samsung", "HTC", "Apple", "Lenovo", "LG", "Motorola", "Sony");
		$laptops=array("Acer", "Asus", "Dell", "HP", "Apple", "Lenovo");
		$tablets=array("Samsung", "Apple", "Asus", "Micromax", "Lenovo", "iBall");
		$tvs=array("Samsung", "Sony", "LG", "Philips", "Panasonic");
		$cameras=array("Nikon", "Canon", "Sony", "Panasonic");
		$money=array(20000,40000,60000,500000);
		$search=$_GET['searchtext'];
	?>
<body>
	<!-- HTML for SEARCH BAR -->
	<div class="row">
	<div id="tfheader" class="wrapper col-md-9">
		<form id="tfnewsearch" method="get" action="categorylist.php">
	        <input type="text" class="tftextinput" name="searchtext" placeholder="eg: Mobiles, HP, Samsung, etc." value=<?php echo @$search?>><span id="category"><select name="category-selection" class="ccategory">
				<option value="All" selected disabled>All Categories</option>
				<option value="mobile">Mobiles</option>
				<option value="laptop">Laptops</option>
				<option value="tablet">Tablets</option>
				<option value="tv">TVs</option>
				<option value="camera">Cameras</option></select></span><input type="submit" value="SEARCH" class="tfbutton">
		</form>
	</div>
	<div class="col-md-3" style="background-color: #030321;height: 100px;">
	<svg viewBox="0 0 960 300">
    <symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">ShopOn</text>
	</symbol>

	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
	</g>
</svg>

	</div>

	</div>
	</body>
	</html>