<html>
	<?php
		include("headernew.php");
		error_reporting(0);
		$conn=mysql_connect("localhost", "root", "Directioner123") or die(mysql_error());
		mysql_select_db("tempphp") or die(mysql_error());
		$prodid=$_GET['id'];
		$emailval=$_POST["useremail"];
		$stremail="SELECT * FROM tempphp.emails";
		$remail=mysql_query($stremail);
		$check=0;
		$t="\"";
		$countm=1;
		if($emailval!==null)
		{
			while($row=mysql_fetch_array($remail))
			{
				$t1=strcasecmp($row['email_id'],$emailval);
				$t2=strcasecmp($t.$row['prod_id'].$t,substr($prodid, 1));
				if($t1==0&&$t2==0)
				{
					$check++;
				}
			}
			if($check==0)
			{
				//echo "yes";
				$insq="INSERT INTO tempphp.emails(prod_id,email_id,countmail) VALUES($prodid,'$emailval',$countm);";
				$retval = mysql_query( $insq, $conn);
				if(! $retval ) {
      				die('Could not enter data: ' . mysql_error());
   				}
			}
		}
		$strsql="SELECT * FROM tempphp.temptable2 WHERE id=" . $_GET["id"]."";
		$strsql2="SELECT * FROM tempphp.logos";
		$strsql3="SELECT * FROM tempphp.shopPrices WHERE id=" . $_GET["id"]."";
		$rs=mysql_query($strsql);
		while($row=mysql_fetch_array($rs)){
			$namehead=$row['name1'];
			$prodid=$row['id'];
			$image=$row['imgsrc'];
			$imgsub1=$row['imgsr1'];
			$imgsub2=$row['imgsr2'];
			$imgsub3=$row['imgsr3'];
			$imgsub4=$row['imgsr4'];
			$f1=$row['f1'];
			$f2=$row['f2'];
			$f3=$row['f3'];
			$f4=$row['f4'];
			$f5=$row['f5'];
			$f6=$row['f6'];
			$f7=$row['f7'];	
			$f8=$row['f8'];
			$mainlogo=$row['mainLogo'];
			$min=$row['mainPrice'];
			$head=$row['heading'];
			$link1=$row['link1'];
			$link2=$row['link2'];
			$link3=$row['link3'];
			$link4=$row['link4'];
			$link5=$row['link5'];
			$link6=$row['link6'];
			$linkm=$row['linkmain'];
			$cat=$row['category'];
			if($cat=="mobile")
			{
				$cat1="Mobiles";
			}
			else if($cat=="laptop")
			{
				$cat1="Laptops";
			}
			else if($cat=="tablet")
			{
				$cat1="Tablets";
			}
			else if($cat=="tv")
			{
				$cat1="TVs";
			}
			else if($cat=="camera")
			{
				$cat1="Cameras";
			}
			else if($cat=="electronics")
			{
				$cat1="Electronics and more";
			}
			else if($cat=="personal")
			{
				$cat1="Personal Care Appliances";
			}
			else if($cat=="health")
			{
				$cat1="Health and Fitness";
			}
			$brand=$row['brand'];
			$mlogo=$row['mainLogo'];
			if($mlogo=="website logos\\croma.jpg")
			{
				$select="get";
			}
			else
			{
				$select="post";
			}
		}
		$rs2=mysql_query($strsql2);
		while ($row=mysql_fetch_array($rs2)) {
			$logo1=$row['amazon'];
			$logo2=$row['croma'];
			$logo3=$row['ebay'];
			$logo4=$row['flipkart'];
			$logo5=$row['shopclues'];
			$logo6=$row['snapdeal'];
		}
		$rs3=mysql_query($strsql3);
		while ($row=mysql_fetch_array($rs3)) {
			$shp1=$row['shop1'];
			$shp2=$row['shop2'];
			$shp3=$row['shop3'];
			$shp4=$row['shop4'];
			$shp5=$row['shop5'];
			$shp6=$row['shop6'];
		}	
	?>

<!-- ************************************************* -->

<link rel="stylesheet" href="multizoom.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script type="text/javascript" src="multizoom.js">
</script><link rel="stylesheet" href="css/bootstrap.min.css">


<script type="text/javascript">

jQuery(document).ready(function($){


	$('#mainImage').addimagezoom({ // single image zoom
		zoomrange: [3, 10],
		magnifiersize: [360,360],
		magnifierpos: 'right',
		cursorshade: true //<-- No comma after last option!
	})

	$('#image11').click(function(){
		$('#mainImage').addimagezoom({ // single image zoom
			zoomrange: [3, 10],	
			magnifiersize: [360,360],
			magnifierpos: 'right',
			cursorshade: true //<-- No comma after last option!
		});
	});

	$('#image22').click(function(){
		$('#mainImage').addimagezoom({ // single image zoom
			zoomrange: [3, 10],
			magnifiersize: [360,360],
			magnifierpos: 'right',
			cursorshade: true //<-- No comma after last option!
		});
	});


	$('#image33').click(function(){
		$('#mainImage').addimagezoom({ // single image zoom
			zoomrange: [3, 10],
			magnifiersize: [360,360],
			magnifierpos: 'right',
			cursorshade: true //<-- No comma after last option!
		});
	});


	$('#image44').click(function(){
		$('#mainImage').addimagezoom({ // single image zoom
			zoomrange: [3, 10],
			magnifiersize: [360,360],
			magnifierpos: 'right',
			cursorshade: true //<-- No comma after last option!
		});
	});


	$('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description', // description selector (optional - but required if descriptions are used) - new
		speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
		descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
		imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
		magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
		zoomrange: [3, 10],
		magnifiersize: [250,250],
		magnifierpos: 'right',
		cursorshadecolor: '#fdffd5',
		cursorshade: true //<-- No comma after last option!
	});
	
	$('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
		disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
				//^-- No comma after last option!	
	});
	
})

</script>

<!-- ************************************************* -->

	
	<head>
		<title>
			<?php echo @$head;?>
		</title>
		<script>
			var previous, prev, s1, s2, s3, s4, s5, s6,catgy;
			var i=0;
			var j=0;
			function underline(identity)
			{
				if(identity=="link1")
				{
					document.getElementById("link1").style.textDecoration="underline";
					
				}
				if(identity=="link2")
				{
					document.getElementById("link2").style.textDecoration="underline";
				}
				if(identity=="link3")
				{
					document.getElementById("link3").style.textDecoration="underline";
				}
			}
			function noUnderline(identity)
			{
				if(identity=="link1")
				{
					document.getElementById("link1").style.textDecoration="none";
				}
				if(identity=="link2")
				{
					document.getElementById("link2").style.textDecoration="none";
				}
				if(identity=="link3")
				{
					document.getElementById("link3").style.textDecoration="none";
				}
			}
			function borderChange()
			{
				document.getElementById('image11').style.borderColor="#000000"
			}
			function changeImage(img)
			{
				if(i!=0)
				{
					document.getElementById(prev).style.borderColor="#00796B";
					if(prev!="image44")
					{
						document.getElementById(prev).style.borderRight="0";
					}
				}
				if(i==0 && img!="image11")
				{
					document.getElementById('image11').style.borderRight="0";
					document.getElementById('image11').style.borderColor="#00796B";
				}
				prev=img;
				previous=document.getElementById(img).src;
				i++;
				document.getElementById('mainImage').src=previous;
				document.getElementById(img).style.borderRight="1px solid #000000";
				document.getElementById(img).style.borderColor="#000000";
			}
			function hoverImage(img)
			{
				document.getElementById('mainImage').src=document.getElementById(img).src;
			}
			function prevImage(img)
			{
				if(i!=0)
				{
					document.getElementById('mainImage').src=previous;
				}
				else
				{
					document.getElementById('mainImage').src=document.getElementById('image11').src;
				}
			}
			function featuresOver()
			{
				document.getElementById('tr1').style.backgroundColor="#E0F2F1";
				document.getElementById('tr3').style.backgroundColor="#E0F2F1";
				document.getElementById('tr5').style.backgroundColor="#E0F2F1";
				document.getElementById('compareId').style.backgroundColor="#B2DFDB";
			}
			function featuresOut()
			{
				document.getElementById('tr1').style.backgroundColor="#B2DFDB";
				document.getElementById('tr3').style.backgroundColor="#B2DFDB";
				document.getElementById('tr5').style.backgroundColor="#B2DFDB";
				document.getElementById('compareId').style.backgroundColor="#ffffff";
			}
			function buttonDisp()
			{
				s1="<?php echo @$shp1; ?>";
				s2="<?php echo @$shp2; ?>";
				s3="<?php echo @$shp3;?>";
				s4="<?php echo @$shp4;?>";
				s5="<?php echo @$shp5;?>";
				s6="<?php echo @$shp6;?>";
				catgy="<?php echo @$cat;?>";
				if(s1=="NA")
				{
					document.getElementById('amazon').style.display='none';
				}
				if(s2=="NA")
				{
					document.getElementById('croma').style.display='none';
				}
				if(s3=="NA")
				{
					document.getElementById('ebay').style.display='none';
				}
				if(s4=="NA")
				{
					document.getElementById('flipkart').style.display='none';
				}
				if(s5=="NA")
				{
					document.getElementById('shopclues').style.display='none';
				}
				if(s6=="NA")
				{
					document.getElementById('snapdeal').style.display='none';
				}
				if(catgy=="laptop" || catgy=="tv")
				{
					document.getElementById('image11').style.height="40px";
					document.getElementById('image22').style.height="40px";
					document.getElementById('image33').style.height="40px";
					document.getElementById('image44').style.height="40px";
				}
			}
		</script>
		<style>
			@font-face {
				font-family: myFont;
				src: url(RobotoCondensed-Light.ttf);
			}
			.firstDiv {
				padding-top: 8px;
				padding-bottom: 8px;
				display: inline-block;
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
			.home {
				text-decoration: none;
				font-size: 22px;
				padding-left: 30px;
				color: #80CBC4;
				font-family: myFont;
			}
			.mobiles {
				text-decoration: none;
				font-size: 22px;
				color: #80CBC4;
				font-family: myFont;
			}
			#links.wrapper
			{
				position:absolute;
    			top:155;
    			left:0;
    			right:0;
    			margin:0 auto;
    			background: #00796B;
    			height: 40px;
			}
			.mobiles2 {
				display: inline-block;
				font-size: 22px;
				color: #80CBC4;
				font-family: myFont;
			}
			.heading {
				margin-top: 60px;
				margin-left: 10px;
				padding-left: 30px;
				padding-right: 30px;
				display: inline-block;
				font-weight: bold;
				font-size: 40px;
				color: #80CBC4;
				font-family: myFont;
				border: #00796B 1px solid;
				border-radius: 25px;
				background-color: #ffffff;
				color: #00796B;
				transition: all 0.5s ease 0s;
				text-align: center;
			}
			.heading:hover {
				background-color: #B2DFDB;
			}
			.mainDiv {
				margin-left: 15px;
				margin-top: 10px;	
				width: 330px;
				border-radius: 25px;
			}
			.front {
				margin-top: 10px;
				text-align: center;
			}
			.images{
				border: #00796B 1px solid;
				float: left;
				width: 348px;
				background-color: #ffffff;
				border-radius: 25px;
				margin-top: 20px;
			}
			.images2 {
				padding-left: 73px;
				padding-right: 43px;
				margin-top: 30px;
			}
			.bigImage {
				max-height:80%;
				max-width:80%;
				padding-top: 20px;	
			}
			.subimages {
				margin-top: 10px;
				padding: 10px 5px 3px 5px;
				cursor: pointer;
				width: 40px;
				margin-right: 0px;
				border: #00796B 1px solid;
				transition: all 0.5s ease 0s;
				border-right: 0;
				height: 70px;

			}
			.subimages:hover {
				box-shadow: inset 0 0 0 2px #00796B;
			}
			.subimagesdiv2{
				display: inline-block;
				margin-right:0;
			}
			.subimagesdiv{
				display: inline-block;
			}
			.preview {
				font-size: 20px;
				color: #00796B;
				padding-top: 30px;
				text-align: center;
				padding-bottom: 5px;
				font-weight: bold;
			}
			.otherInfo {
				width: 900px;
				margin-left: 380px;
			}
			.price {
				font-family: myFont;
				color: #00796B;
				font-size: 42px;
				border: #00796B 1px solid;
				border-radius: 25px;
				width: 900px;
				padding-left: 35px;
				background-color: #ffffff;
				transition: all 0.5s ease 0s;
				height: 70px;
			}
			.price:hover {
				background-color: #B2DFDB;
			}
			.availableAt {
				display: inline-block;
				padding-left: 5px;
				padding-top: 7px;
				padding-bottom: 5px;
			}
			.availableLogo {
				border: 0;
				height: 40px;
				padding-top: 5px;
			}
			.mainFeatures {
				border: #00796B 1px solid;
				border-radius: 25px;
				width: 935px;
				background-color: #ffffff;
				transition: all 0.5s ease 0s;
			}
			.mainFeatures:hover {
				background-color: #B2DFDB;
			}
			.features1 {
				margin-top: 10px;
				display: inline-block;
				float: left;
				padding-left: 100px;
			}
			.features2 {
				margin-top: 10px;
				padding-bottom: 7px;
				display: inline-block;
				padding-left: 100px;
			}
			.productFeatures {
				font-family: myFont;
				color: #00796B;
				font-size: 30px;
				font-weight: bold;
				padding-left: 10px;
				width: 800px;
				text-align: center;
			}
			.featureDetails {
				font-size: 20px;
				font-family: myFont;
				color: #00796B;
				list-style-image: url('checked.png');
			}
			.gap {
				height: 15px;
				background-color: #26A69A;
				margin-left: 50px;
				margin-right: 25px;
				border-left: #00796B 3px solid;
				border-right: #00796B 3px solid;
			}
			.gap2 {
				height: 20px;
				background-color: #26A69A;
				margin-left: 50px;
				margin-right: 25px;
				border-top-left-radius: 25px;
				border-top-right-radius: 25px;
				border-left: #00796B 3px solid;
				border-right: #00796B 3px solid;
				border-top: #00796B 2px solid;
			}
			.gap3 {
				height: 20px;
				background-color: #26A69A;
				margin-left: 50px;
				margin-right: 25px;
				border-bottom-left-radius: 25px;
				border-bottom-right-radius: 25px;
				border-left: #00796B 3px solid;
				border-right: #00796B 3px solid;
				border-bottom: #00796B 3px solid;
			}
			.compare {
				border: #00796B 1px solid;
				border-radius: 25px;
				width: 935px;
				background-color: #ffffff;
				transition: all 0.5s ease 0s;
			}
			.priceCompare {
				font-family: myFont;
				color: #00796B;
				font-size: 30px;
				font-weight: bold;
				padding-left: 40px;
				margin-top: 10px;
				width: 800px;
				text-align: center;
			}
			.sublogos{
				border: 0;
				padding-top: 2px;
				padding-bottom: 2px;
				height: 40px;
			}
			.sublogos1{
				padding-top: 2px;
				padding-bottom: 2px;
				border: 0;
				height: 40px;
			}
			.tableCompare {
				margin-top: 10px;
				margin-left: 90px;
				margin-bottom: 40px;
				border-spacing: 0;
			}
			.tableHeadData {
				color: #ffffff;
				font-size: 25px;
				font-family: myFont;
				width: 250px;
				text-align: center;
			}
			.tableHeadData1 {
				color: #ffffff;
				font-size: 25px;
				font-weight: bold;
				width: 250px;
				font-family: myFont;
				text-align: center;
			}
			.tableRow {
				background-color: #00796B;
			}
			.cost {
				color: #00796B;
				font-size: 25px;
			}
			.tableRowData1 {
				background-color: #B2DFDB;
				transition: all 0.5s ease 0s;
			}
			.tableRowData2 {
				background-color: #80cbc4;
			}
			.shop {
				transition: all 0.3s ease 0s;
				border: #00796B 1px solid;
				border-radius: 10px;
				height: 30px;
				font-size: 17px;
				margin-top: 15px;
				font-family: myFont;
				color: #004D40;
				display: inline-block;
				cursor: pointer;
			}
			.shop:hover {
				background-color: #00695c;
				color: #ffffff;
				border: #000000 1px solid;
			}
			.formPriceAlert {
				float: right;
				padding-left: 20px;
			}
			.buttonPriceAlert {
				transition: all 0.3s ease 0s;
				border: #00796B 1px solid;
				border-radius: 10px;
				height: 40px;
				float: left;
				margin-top: 10px;
				font-size: 27px;
				font-family: myFont;
				margin-left: 30px;
				color: #004D40;
			}
			.buttonPriceAlert:hover {
				color: #ffffff;
				border: #000000 1px solid;
				padding-left: 25px;
				cursor: pointer;
				background: #00695C url('alarm.png') left center no-repeat;
			}
			.shop2 {
				transition: all 0.3s ease 0s;
				border: #00796B 1px solid;
				border-radius: 10px;
				height: 40px;
				font-size: 27px;
				font-family: myFont;
				color: #004D40;
				cursor: pointer;
				margin-top: 10px;
			}
			.shop2:hover {
				background-color: #00695c;
				color: #ffffff;
				border: #000000 1px solid;
			}
			.formPriceAlert2 { 
				float: right;
				padding-left: 20px;
			}
			.minPrice {
				float: left;
				font-weight: bold;
				padding-top: 10px;
				padding-bottom: 5px;
			}
			.minPrice2 {
				float: left;
				padding: 10px 10px 5px 10px;
				
				color: #009688;
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

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
	
@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}


#myModal{
	 text-align: center;
  font-size: 20px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 100%;
  padding: 80px 8px;
}


.emailsub{
	 border: 2px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding:  10px;
  font-family: roboto;
  font-size: 14px;
  width: 150px;
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

</style>	
	</head>
	<body style="background-color: #B2DFDB" onload="buttonDisp();">
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

		<div id="links" class="wrapper">
			<div class="firstDiv"><a href="searchbox.php" class="home" onmouseover="underline('link1')" onmouseout="noUnderline('link1')" id="link1">Home</a></div>
			<div class="mobiles2">></div>
			<a href='categorylist.php?category= "<?php echo @$cat?>"' class="mobiles" onmouseover="underline('link2')" onmouseout="noUnderline('link2')" id="link2"><?php echo @$cat1?></a>
			<div class="mobiles2">></div>
			<a href='categorylist.php?category= "<?php echo @$cat?>"&brand= "<?php echo @$brand?>"' class="mobiles" onmouseover="underline('link3')" onmouseout="noUnderline('link3')" id="link3"><?php echo @$brand?></a>
			<div class="mobiles2">></div>
			<div class="mobiles2"><b><?php echo @$head;?></b></div>
		</div>
		<div class="heading">
			<div><?php echo @$namehead;?></div>
		</div>
		<div class="mainDiv">
			<div class="images">
				<div class="front">
					<img src="<?php echo @$image;?>" class="bigImage" id='mainImage'></img>	
				</div>
				<div class="images2">
					<div class="subimagesdiv2"><img src="<?php echo @$imgsub1;?>" class="subimages" onclick="changeImage('image11')" id="image11" onload="borderChange()" onmouseover="hoverImage('image11')" onmouseout="prevImage('image11')" style="border-right: #00796B 1px solid;"></img>
					</div><div class="subimagesdiv"><img src="<?php echo @$imgsub2;?>" class="subimages" onclick="changeImage('image22')" id="image22" onmouseover="hoverImage('image22')" onmouseout="prevImage('image22')"></img>
					</div><div class="subimagesdiv"><img src="<?php echo @$imgsub3;?>" class="subimages" onclick="changeImage('image33')" id="image33" onmouseover="hoverImage('image33')" onmouseout="prevImage('image33')"></img>
					</div><div class="subimagesdiv"><img src="<?php echo @$imgsub4;?>" class="subimages" onclick="changeImage('image44')" id="image44" onmouseover="hoverImage('image44')" onmouseout="prevImage('image44')" style="border-right: #00796B 1px solid;"></img></div>
				</div>
				<div class="preview">Preview</div>
			</div>
			<div class="otherInfo">
				<div class="gap2"></div>
				<div class="price">
					<div class="minPrice"><?php echo @$min;?></div><div class="minPrice2">available at</div>
					<div class="availableAt">
						<img src="<?php echo @$mainlogo?>" class="availableLogo"/>
						<!--form id="alert123" class="formPriceAlert">
							<input type="submit" value="Price Alert" id="alertButton" class="buttonPriceAlert"/>
						</form-->
    					
						<form method="<?php echo @$select;?>" target="_blank" action="<?php echo @$linkm;?>" id="shopMain" class="formPriceAlert2">
							<input type="submit" value="Shop Now!" id="amazonButton" class="shop2"/>
						</form>
						<button type="button" id="myBtn" class="buttonPriceAlert" style="float: right;" >Price Alert</button>
						<!-- The Modal -->
						<form method="post" action='products.php?id= "<?php echo @$prodid?>"'>
							<div id="myModal" class="modal">
							<!-- Modal content -->
  								<div class="modal-content">
    								<div class="modal-header">
      									<span class="close">×</span>
      										<h2>Modal Header</h2>
    								</div>
    								<div class="modal-body">
      									<div class="form-group">
                							<label for="exampleInputEmail1">Email address</label>
                								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="useremail">
              							</div>
    								</div>
    								<!--div-->
    										<input type="submit" value="Register" class="emailsub" style="margin-bottom: 20px;" >
    								<!--/div-->
    							</div>
							</div>
							</form>
							<script>
							// Get the modal
							var modal = document.getElementById('myModal');

							// Get the button that opens the modal
							var btn = document.getElementById("myBtn");

							// Get the <span> element that closes the modal
							var span = document.getElementsByClassName("close")[0];

							// When the user clicks the button, open the modal
							btn.onclick = function() {
    							modal.style.display = "block";
							}

							// When the user clicks on <span> (x), close the modal
							span.onclick = function() {
    							modal.style.display = "none";
							}

							// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
    							if (event.target == modal) {
        							modal.style.display = "none";
    							}
							}
						</script>
					</div>
				</div>
				<div class="gap">
				</div>
				<div class="mainFeatures">
					<div class="productFeatures">Product features:</div>
					<div class="features1">
						<ul>
							<li class="featureDetails"><?php echo @$f1;?></li>
							<li class="featureDetails"><?php echo @$f2;?></li>
							<li class="featureDetails"><?php echo @$f3;?></li>
							<li class="featureDetails"><?php echo @$f4;?></li>
						</ul>
					</div>
					<div class="features2">
						<ul>
							<li class="featureDetails"><?php echo @$f5;?></li>
							<li class="featureDetails"><?php echo @$f6;?></li>
							<li class="featureDetails"><?php echo @$f7;?></li>
							<li class="featureDetails"><?php echo @$f8;?></li>
						</ul>
					</div>
				</div>
					<div class="gap"></div>
				<div class="compare" onmouseover="featuresOver()" onmouseout="featuresOut()" id="compareId">
					<div class="priceCompare">All Prices:</div>
					<table class="tableCompare">
						<tr class="tableRow">
							<th class="tableHeadData1">Store</th>
							<th class="tableHeadData">Price</th>
							<th class="tableHeadData">Shop Now</th>
						</tr>
						<tr class="tableRowData1" id="tr1">
							<td align="center">
								<img src="<?php echo @$logo1?>" class="sublogos">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp1;?>
							</td>
							<td align="center">
								<form method="post" target="_blank" action="<?php echo @$link1;?>" id="amazon">
									<input type="submit" value="Shop Now!" id="amazonButton" class="shop"/>
								</form>
							</td>
						</tr>
						<tr class="tableRowData2">
							<td align="center">	
								<img src="<?php echo @$logo2?>" class="sublogos">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp2;?>
							</td>
							<td align="center" >
								<form method="get" target="_blank" action="<?php echo @$link2;?>" id="croma">
									<input type="submit" value="Shop Now!" id="cromaButton" class="shop"/>
								</form>
							</td>
						</tr>
						<tr class="tableRowData1" id="tr3">
							<td align="center">
								<img src="<?php echo @$logo3?>" class="sublogos">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp3;?>
							</td>
							<td align="center">
								<form method="post" target="_blank" action="<?php echo @$link3;?>" id="ebay">
									<input type="submit" value="Shop Now!" id="ebayButton" class="shop"/>
								</form>
							</td>
						</tr>
						<tr class="tableRowData2">
							<td align="center">
								<img src="<?php echo @$logo4?>" class="sublogos">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp4;?>
							</td>
							<td align="center">
								<form method="post" target="_blank" action="<?php echo @$link4;?>" id="flipkart">
									<input type="submit" value="Shop Now!" id="flipkartButton" class="shop"/>
								</form>
							</td>
						</tr>
						<tr class="tableRowData1"  id="tr5">
							<td align="center">
								<img src="<?php echo @$logo5?>" class="sublogos1">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp5;?>
							</td>
							<td align="center">
								<form method="post" target="_blank" action="<?php echo @$link5;?>" id="shopclues">
									<input type="submit" value="Shop Now!" id="shopcluesButton" class="shop"/>
								</form>
							</td>
						</tr>
						<tr class="tableRowData2">
							<td align="center">
								<img src="<?php echo @$logo6?>" class="sublogos">
							</td>
							<td align="center" class="cost">
								<?php echo @$shp6;?>
							</td>
							<td align="center">
								<form method="post" target="_blank" action="<?php echo @$link6;?>" id="snapdeal">
									<input type="submit" value="Shop Now!" id="snapdealButton" class="shop"/>
								</form>
							</td>
						</tr>
					</table>
				</div>
				<div class="gap3"></div>
			</div>
		</div>
	</body>
</html>