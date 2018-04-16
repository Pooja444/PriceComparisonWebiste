<!DOCTYPE html>
<html><?php
		include("headernew.php"); 
		//header("header.php",  true,  301 );
		//exit;
		$categories=array("mobile", "laptop", "tablet", "tv", "camera", "electronics", "personal", "health");
		$mobiles=array("Xiaomi", "Samsung", "HTC", "Apple", "Lenovo", "LG", "Motorola", "Sony");
		$laptops=array("Acer", "Asus", "Dell", "HP", "Apple", "Lenovo");
		$tablets=array("Samsung", "Apple", "Asus", "Micromax", "Lenovo", "iBall");
		$tvs=array("Samsung", "Sony", "LG", "Philips", "Panasonic");
		$cameras=array("Nikon", "Canon", "Sony", "Panasonic");
		$money=array(20000,40000,60000,500000);
		$electronics=array();
		$personal=array();
		$health=array();
	?><head>
<title>Search Box Example 1</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- CSS styles for standard search box -->
<!--<link rel="stylesheet" type="text/css" href="searchbox.css"/>-->
<script type="text/javascript" src="searchbox.js"></script>

 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
   		$('#myCarousel2').carousel({
  		interval: 4000
		})

		$('#myCarousel2 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel3').carousel({
  		interval: 4000
		})

		$('#myCarousel3 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel4').carousel({
  		interval: 4000
		})

		$('#myCarousel4 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel5').carousel({
  		interval: 4000
		})

		$('#myCarousel5 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel6').carousel({
  		interval: 4000
		})

		$('#myCarousel6 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel7').carousel({
  		interval: 4000
		})

		$('#myCarousel7 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel8').carousel({
  		interval: 4000
		})

		$('#myCarousel8 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });

  	$(document).ready(function() {
   		$('#myCarousel9').carousel({
  		interval: 4000
		})

		$('#myCarousel9 .items').each(function(){
  			var next = $(this).next();
  			if (!next.length) {
    		next = $(this).siblings(':first');
		  	}
  			next.children(':first-child').clone().appendTo($(this));
  
 			for (var i=0;i<2;i++) {
    		next=next.next();
    		if (!next.length) {
    			next = $(this).siblings(':first');
  			}
    
    		next.children(':first-child').clone().appendTo($(this));
  			}
			});
        
        });
        

</script>

<style type="text/css">
#body{
height:100%;
width:100%;}



/* CAROUSEL */
.contain{
	margin-bottom: 30px;
	margin-top: 0;
}

.container{
	margin-bottom: 30px;
}

.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-indicators li{
    background: #404549;
}

.flipper img {
    width: 100%;
    max-height: 250px;
}

.slide-1,.slide-2,.slide-3,.slide-4{
height:250px;
}

.nav>li>a{
	transition: all 0.5s ease 0s;
	color: #FFD700;
}

.nav>li>a:focus,.nav>li>a:hover{
	text-decoration:none;
	
	padding-left: 60px;	
	color: #424242;
}
/* CAROUSEL */
.controlled {
    width: 0;
}

/*.carousel-control.left,
.carousel-control.right {
	opacity: .7;
	filter: alpha(opacity=70);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}

.carousel-control.left span {
	padding: 0px;
	margin-left: 0px;
}

.carousel-control.right span {
	padding: 0px;
	margin-right: 0px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
	position: absolute;
	top: 45%;
	z-index: 5;
	display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
	left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
	right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
	background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
	opacity: .3;
	filter: alpha(opacity=30);
}*/

#controlled1,
#controlled2 {
	opacity: .7;
	filter: alpha(opacity=70);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}

#controlled1 span {
	padding: 0px;
	margin-left: 0px;
}

#controlled2 span {
	padding: 0px;
	margin-right: 0px;
}

.controlled .glyphicon-chevron-left, 
.controlled .glyphicon-chevron-right, 
.controlled .icon-prev, 
.controlled .icon-next {
	position: absolute;
	top: 45%;
	z-index: 5;
	display: inline-block;
}

.controlled .glyphicon-chevron-left,
.controlled .icon-prev {
	left: 0;
}

.controlled .glyphicon-chevron-right,
.controlled .icon-next {
	right: 0;
}

#controlled1 span,
#controlled2 span {
	background-color: #000;
}


#controlled1 span:hover,
#controlled2 span:hover {
	opacity: .3;
	filter: alpha(opacity=30);
}

/*DROPDOWN MULTILEVEL MENU*/

.header2{
	margin-bottom: 0;
}

.dropdown-submenu {
    position: relative;
}

.dropdown:hover {
    background-color: #F44336;
}

.dropdown:hover>.dropdown-menu{
	display:block;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}


.dropdown-submenu:hover>a:after {
    border-left-color: blue;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}


/*FLIP IMAGES*/
/* entire container, keeps perspective */
/*.flip-container {
	perspective: 1000px;
}*/
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}


.flipimg{
	
	width: 100%;
	height: 100%;
}


/*.flip-container, .front, .back {
	width: 250px;
	height: 250px;
}*/


/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top:0;
	left:0;
}


/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
	position:relative;
}
/*Flip Button*/
#bttn {
	position: absolute;
	top: 155px;
		left: 80px;
	border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
#bttn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#bttn span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#bttn:hover span {
  padding-right: 25px;
}

#bttn:hover span:after {
  opacity: 1;
  right: 0;
}

.button12 {
	width: 200px;
	height: 50px;
	background-color: #770014;
}

.white-panel {
  position: relative;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  margin-right: 0;
  margin-left: 0; 
    height: 200px;
  width: 350px;
}

.saleimg{
	transition: all 0.5s ease 0s;
}

.saleimg:hover{
	box-shadow: 10px 10px 50px grey;
}

.row-no-gutter [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.data-item{
	text-align: center;
	font-size: 30px;
	margin-top: 10px;
	color: #212121;
	margin-left: 50px;
	font-weight: bold;
}



.imgchange{
	box-shadow: 0 0 10px black;
	padding: 5px 5px 5px 5px;
}

#navmob:hover{
	background:url('smartphone.png') 15px no-repeat;
}
#navhome:hover{
	background:url('home.png') 15px no-repeat;
}
#navlap:hover{
	background:url('laptop.png') 15px no-repeat;
}
#navcam:hover{
	background:url('camera.png') 15px no-repeat;
}
#navtv:hover{
	background:url('monitor.png') 15px no-repeat;
}
#navtab:hover{
	background:url('tablet.png') 15px no-repeat;
}



</style>
</head>
<body style="background-image: url('Images/bg.jpg');">
	<!-- HTML for SEARCH BAR -->
	<!--<div id="tfheader" class="wrapper">
		<form id="tfnewsearch" method="get" action="categorylist.php">
	        <input type="text" class="tftextinput" name="searchtext" placeholder="eg: Mobiles, HP, Samsung, etc."><span id="category"><select name="category-selection" class="ccategory">
				<option value="All" selected disabled>All Categories</option>
				<option value="mobile">Mobiles</option>
				<option value="laptop">Laptops</option>
				<option value="book">Books</option>
				<option value="tv">TVs</option>
				<option value="camera">Cameras</option>
				<option value="electronics">Electronics and More</option>
				<option value="personal">Personal Care Appliances</option>
				<option value="health">Health and Fitness</option></select></span><input type="submit" value="SEARCH" class="tfbutton">
		</form>
	</div>-->

		<!-- NAVBAR -->
	<div class="header2">
		<nav class="navbar navbar-inverse navbar-fixed">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class="active"><a href="searchbox.php" class="main-item" style="color:#FFD700" id="navhome">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle main-item" data-toggle="dropdown" onclick="location.href = 'categorylist.php? category=\'<?php echo @$categories[0]?>\'';" style="color:#FFD700" id="navmob">Mobiles <span class="caret"></span></a>
					<ul class="dropdown-menu multi-level">
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands</a>
							<ul class="dropdown-menu">
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[0];?>"&category="<?php echo @$categories[0];?>"'>Xiaomi</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[1];?>"&category="<?php echo @$categories[0];?>"'>Samsung</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[2];?>"&category="<?php echo @$categories[0];?>"'>HTC</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[3];?>"&category="<?php echo @$categories[0];?>"'>Apple</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[4];?>"&category="<?php echo @$categories[0];?>"'>Lenovo</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[5];?>"&category="<?php echo @$categories[0];?>"'>LG</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[6];?>"&category="<?php echo @$categories[0];?>"'>Motorola</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$mobiles[7];?>"&category="<?php echo @$categories[0];?>"'>Sony</a></li>
							</ul>
						</li>
						<li><a href='categorylist.php? category="<?php echo @$categories[0]?>"' class="see-all">See All Brands <span class="text-arw">&#8594;</span></a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Price</li>
						<li><a href='categorylist.php?money="<?php echo @$money[0];?>"&category1="<?php echo @$categories[0];?>"'>Under Rs. 20000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[1];?>"&category1="<?php echo @$categories[0];?>"'>Rs. 20000 - Rs. 40000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[2];?>"&category1="<?php echo @$categories[0];?>"'>Rs. 40000 - Rs. 60000</a></li>
						<li>
					</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle main-item" data-toggle="dropdown" style="color:#FFD700" onclick="location.href = 'categorylist.php? category=\'<?php echo @$categories[1]?>\'';" id="navlap">Laptops <span class="caret"></span></a>
					<ul class="dropdown-menu multi-level">
						<li class="dropdown-submenu">
							<a href='categorylist.php? category="<?php echo @$categories[1]?>"' class="dropdown-toggle" data-toggle="dropdown">Brands</a>
							<ul class="dropdown-menu">
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[0];?>"&category="<?php echo @$categories[1];?>"'>Acer</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[1];?>"&category="<?php echo @$categories[1];?>"'>Asus</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[2];?>"&category="<?php echo @$categories[1];?>"'>Dell</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[3];?>"&category="<?php echo @$categories[1];?>"'>HP</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[4];?>"&category="<?php echo @$categories[1];?>"'>Apple</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$laptops[5];?>"&category="<?php echo @$categories[1];?>"'>Lenovo</a></li>
							</ul>
						</li>
						<li><a href='categorylist.php? category="<?php echo @$categories[1]?>"' class="see-all">See All Brands <span class="text-arw">&#8594;</span></a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Price</li>
						<li><a href='categorylist.php?money="<?php echo @$money[0];?>"&category1="<?php echo @$categories[1];?>"'>Under Rs. 20000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[1];?>"&category1="<?php echo @$categories[1];?>"'>Rs. 20000 - Rs. 40000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[2];?>"&category1="<?php echo @$categories[1];?>"'>Rs. 40000 - Rs. 60000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[3];?>"&category1="<?php echo @$categories[1];?>"'>Rs. 60000 and Above</a></li>
					</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle main-item" data-toggle="dropdown" style="color:#FFD700" onclick="location.href = 'categorylist.php? category=\'<?php echo @$categories[2]?>\'';" id="navtab">Tablets <span class="caret"></span></a>
					<ul class="dropdown-menu multi-level">
						<li class="dropdown-submenu">
							<a href='categorylist.php? category="<?php echo @$categories[2]?>"' class="dropdown-toggle" data-toggle="dropdown">Brands</a>
							<ul class="dropdown-menu">
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[0];?>"&category="<?php echo @$categories[2];?>"'>Samsung</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[1];?>"&category="<?php echo @$categories[2];?>"'>Apple</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[2];?>"&category="<?php echo @$categories[2];?>"'>Asus</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[3];?>"&category="<?php echo @$categories[2];?>"'>Micromax</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[4];?>"&category="<?php echo @$categories[2];?>"'>Lenovo</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tablets[5];?>"&category="<?php echo @$categories[2];?>"'>iBall</a></li>
							</ul>
						</li>
						<li><a href='categorylist.php? category="<?php echo @$categories[2]?>"' class="see-all">See All Brands <span class="text-arw">&#8594;</span></a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Price</li>
						<li><a href='categorylist.php?money="<?php echo @$money[0];?>"&category1="<?php echo @$categories[2];?>"'>Under Rs. 20000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[1];?>"&category1="<?php echo @$categories[2];?>"'>Rs. 20000 - Rs. 40000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[2];?>"&category1="<?php echo @$categories[2];?>"'>Rs. 40000 - Rs. 60000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[3];?>"&category1="<?php echo @$categories[2];?>"'>Rs. 60000 and Above</a></li>
					</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle main-item" data-toggle="dropdown" onclick="location.href = 'categorylist.php? category=\'<?php echo @$categories[4]?>\'';" style="color:#FFD700" id="navcam">Cameras <span class="caret"></span></a>
						<ul class="dropdown-menu multi-level">
							<li class="dropdown-submenu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands</a>
								<ul class="dropdown-menu">
									<li><a href='categorylist.php?brand= "<?php echo @$cameras[0];?>"&category="<?php echo @$categories[4];?>"'>Nikon</a></li>
									<li><a href='categorylist.php?brand= "<?php echo @$cameras[1];?>"&category="<?php echo @$categories[4];?>"'>Canon</a></li>
									<li><a href='categorylist.php?brand= "<?php echo @$cameras[2];?>"&category="<?php echo @$categories[4];?>"'>Sony</a></li>
									<li><a href='categorylist.php?brand= "<?php echo @$cameras[3];?>"&category="<?php echo @$categories[4];?>"'>Panasonic</a></li>
									<li><a href='categorylist.php?brand= "<?php echo @$cameras[4];?>"&category="<?php echo @$categories[4];?>"'>Fujifilm</a></li>
								</ul>
							</li>
							<li><a href='categorylist.php? category="<?php echo @$categories[4]?>"' class="see-all">See All Brands <span class="text-arw">&#8594;</span></a></li>
							<li class="divider"></li>
						<li class="dropdown-header">Price</li>
						<li><a href='categorylist.php?money="<?php echo @$money[0];?>"&category1="<?php echo @$categories[4];?>"'>Under Rs. 20000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[1];?>"&category1="<?php echo @$categories[4];?>"'>Rs. 20000 - Rs. 40000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[2];?>"&category1="<?php echo @$categories[4];?>"'>Rs. 40000 - Rs. 60000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[3];?>"&category1="<?php echo @$categories[4];?>"'>Rs. 60000 and Above</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle main-item" data-toggle="dropdown" onclick="location.href = 'categorylist.php? category=\'<?php echo @$categories[3]?>\'';" style="color:#FFD700" id="navtv">TVs<span class="caret"></span></a>
					<ul class="dropdown-menu multi-level">
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands</a>
							<ul class="dropdown-menu">
								<li><a href='categorylist.php?brand= "<?php echo @$tvs[0];?>"&category="<?php echo @$categories[3];?>"'>Samsung</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tvs[1];?>"&category="<?php echo @$categories[3];?>"'>Sony</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tvs[2];?>"&category="<?php echo @$categories[3];?>"'>LG</a></li>
								<li><a href='categorylist.php?brand= "<?php echo @$tvs[3];?>"&category="<?php echo @$categories[3];?>"'>Philips</a></li>
							</ul>
						</li>
						<li><a href='categorylist.php? category="<?php echo @$categories[3]?>"' class="see-all">See All Brands <span class="text-arw">&#8594;</span></a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Price</li>
						<li><a href='categorylist.php?money="<?php echo @$money[0];?>"&category1="<?php echo @$categories[3];?>"'>Under Rs. 20000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[1];?>"&category1="<?php echo @$categories[3];?>"'>Rs. 20000 - Rs. 40000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[2];?>"&category1="<?php echo @$categories[3];?>"'>Rs. 40000 - Rs. 60000</a></li>
						<li><a href='categorylist.php?money="<?php echo @$money[3];?>"&category1="<?php echo @$categories[3];?>"'>Rs. 60000 and Above</a></li>
					</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- CAROUSEL -->
	<div class="contain">	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					
					<div class="slide-1"><a target="_blank" href="http://www.amazon.in/b/ref=br_imp?_encoding=UTF8&node=7198570031&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=desktop-hero-kindle-A&pf_rd_r=11S58BDV0NQ24WCMHTEN&pf_rd_t=Gateway&pf_rd_p=4e3a04a5-7a4b-406e-b141-bb82b7decce6&pf_rd_i=desktop
"><img src="images\carousel\carouselimg1.jpg" style="width: 100%;height: 100%;"></a>
					</div>
				</div>

				<div class="item">
					<div class="slide-2"><a target="_blank" href="http://www.amazon.in/dp/B01FM7HV34/ref=br_imp?pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=desktop-hero-softlines&pf_rd_r=03XB5GF15DNK7WWKJKVX&pf_rd_t=Gateway&pf_rd_p=0d71e4b3-cc15-48ad-b74f-5ecf734cf40d&pf_rd_i=desktop
"><img src="images\carousel\carouselimg2.jpg" style="width: 100%;height: 100%;"></a></div>
				</div>
    
				<div class="item">
					<div class="slide-3"><a target="_blank" href="http://www.amazon.in/b/ref=mh_audsale_pcnd_nov?_encoding=UTF8&node=11385837031&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=desktop-hero-B&pf_rd_r=1SG719NCXZW12JHKE0QS&pf_rd_t=Gateway&pf_rd_p=397ac2d8-d992-42de-8435-edc56e5564e4&pf_rd_i=desktop
"><img src="images\carousel\carouselimg3.jpg" style="width: 100%;height: 100%;"></a></div>	
				</div>

				<div class="item">
					<div class="slide-4"><a target="_blank" href="http://www.shopclues.com/mobiles/top-selling-mobiles-and-tablets.html
"><img src="images\carousel\carouselimg4.jpg" style="width: 100%;"></a></div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control controlled" id="controlled1" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control controlled" id="controlled2" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>

	<!-- FLIP IMAGES -->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				
					<div class="flip-container white-panel" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper" >
							<div class="front">
								<!-- front content -->
								<img src="images/laptops.jpg" class="flipimg">
							</div>
							<div class="back">
								<!-- back content -->
								<img src="images/laptops.jpg" class="flipimg" style="opacity: 0.7;">
								<div class="button">
									<a href='categorylist.php?category="laptop"'><button id="bttn" class="button1"><span>Laptops</span></button></a>
								</div>
							</div>
						</div>
					</div>
				
			</div>
			<div class="col-sm-4">
				<div>
					<div class="flip-container white-panel" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<!-- front content -->
								<img src="images/mobile.jpg" class="flipimg">
							</div>
							<div class="back">
								<!-- back content -->
								<img src="images/mobile.jpg" class="flipimg" style="opacity: 0.5;">
								<div class="button">
									<a href='categorylist.php?category="mobile"'><button id="bttn" class="button1"><span>Mobiles</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div>
					<div class="flip-container white-panel" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<!-- front content -->
								<img src="images/camera.jpg" class="img-responsive" class="flipimg">
							</div>
							<div class="back">
								<!-- back content -->
								<img src="images/camera.jpg" class="flipimg" style="opacity: 0.7;">
								<div class="button">
									<a href='categorylist.php?category="camera"'><button id="bttn" class="button1"><span>Cameras</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="container">
<div class="row">
    <div class="col-sm-6 saleimg">
      <a target="_blank" href="http://www.ebay.in/rpp/mobiles-and-accessories/Mobile-Accessories/power-bank
"><img class="img-responsive" src="images\ebay_niche.jpg" ></a>
    </div>
     <div class="col-sm-6 saleimg">
      <a target="_blank" href="http://www.ebay.in/rpp/mobiles-and-accessories/3GB-4GB-RAM-Mobile-Phones/mobile-phones
"><img class="img-responsive" src="images\ebay_niche2.jpg" ></a>
    </div>
     <div class="col-sm-6 saleimg" style="margin-top: 20px;">
      <a target="_blank" href="https://www.flipkart.com/mobiles?otracker=nmenu_sub_Electronics_0_Mobiles
"><img class="img-responsive" src="images\flipkart_niche.jpg" ></a>
    </div>

     <div class="col-sm-6 saleimg" style="margin-top: 20px;">
      <a target="_blank" href="https://www.snapdeal.com/offers/deal-of-the-day"><img class="img-responsive" src="images\snapdeal_images.jpg" ></a>
    </div>
  </div>
</div>


<!-- BRANDS CAROUSEL 1 -->
  <div class="carou">
  <div class="data-item"><span>Mobiles</span></div>
	  
	      <div class="carousel slide" id="myCarousel2" data-type="multi" data-interval="2000" data-ride="carousel" style="background-color: #90CAF9;">
	        <div class="carousel-inner">
	          <div class="item active items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Apple"&category="mobile"'><img src="mobiles\apple.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Xiaomi"&category="mobile"'><img src="mobiles\mi.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="HTC"&category="mobile"'><img src="mobiles\htc.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Lenovo"&category="mobile"'><img src="mobiles\lenovo.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="LG"&category="mobile"'><img src="mobiles\lg.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Motorola"&category="mobile"'><img src="mobiles\motorola.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Samsung"&category="mobile"'><img src="mobiles\samsung.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	        
	          
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Sony"&category="mobile"'><img src="mobiles\sony.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          
	          
	          
	       
	        </div>
	        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>

	<!-- BRANDS CAROUSEL 2 -->
  <div class="carou">
	<div class="data-item"><span>Laptops</span></div>  
	      <div class="carousel slide" id="myCarousel3" data-type="multi" data-interval="2000" data-ride="carousel" style="background-color: #FFD54F;">
	        <div class="carousel-inner">
	          <div class="item active items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Acer"&category="laptop"'><img src="laptops\acer.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Apple"&category="laptop"'><img src="laptops\apple.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Lenovo"&category="laptop"'><img src="laptops\lenovo.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="HP"&category="laptop"'><img src="laptops\hp.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Dell"&category="laptop"'><img src="laptops\dell.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Asus"&category="laptop"'><img src="laptops\asus.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	        
	       
	        </div>
	        <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>

	<!-- BRANDS CAROUSEL 3 -->
  <div class="carou">
	<div class="data-item"><span>Tablets</span></div>  
	      <div class="carousel slide" id="myCarousel4" data-type="multi" data-interval="2000" data-ride="carousel" style="background-color: #81D4FA;">
	        <div class="carousel-inner">
	          <div class="item active items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="iBall"&category="tablet"'><img src="tablets\iball3.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Samsung"&category="tablet"'><img src="tablets\samsung.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Apple"&category="tablet"'><img src="tablets\apple.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Micromax"&category="tablet"'><img src="tablets\micromax.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Asus"&category="tablet"'><img src="tablets\asus.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Lenovo"&category="tablet"'><img src="tablets\lenovo.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	        
	       
	        </div>
	        <a class="left carousel-control" href="#myCarousel4" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel4" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>

	<!-- BRANDS CAROUSEL 4 -->
  <div class="carou">
	 <div class="data-item"><span>Cameras</span></div> 
	      <div class="carousel slide" id="myCarousel5" data-type="multi" data-interval="2000" data-ride="carousel" style="background-color: #FF7043;">
	        <div class="carousel-inner">
	          <div class="item active items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Nikon"&category="camera"'><img src="cameras\nikon.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Canon"&category="camera"'><img src="cameras\canon.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Fujifilm"&category="camera"'><img src="cameras\fujifilm.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Sony"&category="camera"'><img src="cameras\sony.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Panasonic"&category="camera"'><img src="cameras\panasonic.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          
	        </div>
	        <a class="left carousel-control" href="#myCarousel5" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel5" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>

	<!-- BRANDS CAROUSEL 5 -->
  <div class="carou">
	<div class="data-item"><span>TVs</span></div>  
	      <div class="carousel slide" id="myCarousel6" data-type="multi" data-interval="2000" data-ride="carousel" style="background-color: #1E88E5;">
	        <div class="carousel-inner">
	          <div class="item active items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="LG"&category="tv"'><img src="TVs\lg.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Philips"&category="tv"'><img src="TVs\philips.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Samsung"&category="tv"'><img src="TVs\samsung.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          <div class="item items">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php? brand="Sony"&category="tv"'><img src="TVs\sony.jpg" class="img-responsive imgchange"></a></div>
	          </div>
	          
	        </div>
	        <a class="left carousel-control" href="#myCarousel6" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel6" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>
  
</body>
</html>