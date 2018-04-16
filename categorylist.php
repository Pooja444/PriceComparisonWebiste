<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"><title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script type="text/javascript">
	function mailnotsent()
	{

	}
	function mailsent()
	{
		
	}
</script>
<!--script type="text/javascript" src="multicarousel.js"></script-->
<?php
				include("headernew.php");
				error_reporting(0);
				$conn=mysql_connect("localhost", "root", "Directioner123") or die(mysql_error());
				mysql_select_db("tempphp") or die(mysql_error());

				# FOR SEARCH BOX AND RANGE IN NAV-BAR
				$categories=array("mobile", "laptop", "tablet", "tv", "camera", "electronics", "personal", "health");
				$mobiles=array("Xiaomi", "Samsung", "HTC", "Apple", "Lenovo", "LG", "Motorola", "Sony");
				$laptops=array("Acer", "Asus", "Dell", "HP", "Apple", "Lenovo");
				$tablets=array("Samsung", "Apple", "Asus", "Micromax", "Lenovo", "iBall");
				$tvs=array("Samsung", "Sony", "LG", "Philips");
				$cameras=array("Nikon", "Canon", "Sony", "Panasonic", "Fujifilm");
				$catlength=array(8,6,6,4,5);
				$catlength2=array("mobile"=>8,"laptop"=>6,"tablet"=>6,"tv"=>4,"camera"=>5);
				$electronics=array();
				$personal=array();
				$health=array();

				$seqm=array(0,2,3,1,4,5,6,7);
				$seql=array(0,1,2,3,5,4);
					
				$search=$_GET["searchtext"];
				$searchtemp=$search;
				$getcat=$_GET["category-selection"];
				$range=$_GET["money"];
				$catset=$_GET["category1"];
				$i=0;
				$j=0;
				$t="\"";
				$yay="'mobiles\\mismall.jpg'";
				#TO FIND TOTAL NUMBER OF PRODUCTS
				$qtot="SELECT * FROM tempphp.temptable2";
				$rtot=mysql_query($qtot);
				$total=0;
				while ($row=mysql_fetch_array($rtot)) {
					if($row['name1']!==null)
					{
						$total++;
					}
				}
				# FOR EMAILS
				$qemail="SELECT * FROM tempphp.temptable2";
				$remail=mysql_query($qemail);
				while($row=mysql_fetch_array($remail))
				{
					if($row['mainprice']<$row['mainpricenew'] && strcasecmp($row['mainPrice'], $row['mainpricenew'])!=0)
					{
						$productname=$row['name1'];
						$prodid=$row['id'];
						$qsend="SELECT * FROM tempphp.emails where prod_id=".$row['id']."";
						$rsend=mysql_query($qsend);
						while ($row=mysql_fetch_array($rsend))
						{
							if($row['countmail']==0)
							{
								$newnew="localhost/wt/products.php?id=".$prodid."";
								//echo "Mail has to be sent to ".$row['email_id'];
								require('phpmailer/PHPMailerAutoload.php');
								$email = $row['email_id']; //The email you have to send to
								$mail = new PHPMailer(true);  // create a new object
								$mail->IsSMTP(); // enable SMTP
								$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
								$mail->SMTPAuth = true;  // authentication enabled
								$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
								$mail->Host = 'smtp.gmail.com';
								$message = "Thank you for Registering for the price alert feature of our website ShopOn
You've recieved an email since the prices for the product ".$productname." have dropped from ".$row['original_p']." to ".$row['new_p'].". You can check our website for the product details. You will recieve another email once the prices drop further. If this email is delivered to your spam box,please mark this as 'Not Spam'.
  
  								";
								$mail->Timeout = 3600; 
  								$mail->Username = "shoponwt@gmail.com";  //YOUR EMAIL ID HERE
  								$mail->Password = "shoponwt123";           //YOUR EMAIL PASSWORD HERE
  								$mail->SetFrom('shoponwt@gmail.com', 'www.shopon.com'); //FROM WHOM AND NAME ON EMAIL
  								$mail->Subject = "Thank you for registering";
  								$mail->Port       = 465;                   
  								$mail->SMTPSecure = "ssl"; 
  								$mail->Body = $message;
  								$mail->AddAddress($email);
  								if(!$mail->Send())
  								{
      								//echo $mail->errorMessages();
      								//echo "<script type='text/javascript'> mailnotsent(); </script>";
  								} 
  								else
  								{
      								//echo "<script type='text/javascript'> mailsent(); </script>";
  								}
								$upquery="UPDATE tempphp.emails SET countmail=1 WHERE email_id=".$t.$row['email_id'].$t." and prod_id=".$row['prod_id']."";
								$retval = mysql_query( $upquery, $conn);
							}
						}
					}
				}

                $px="100";
				# WHEN A 'PRICE RANGE' IS SELCTED IN A CATEGORY IN NAV BAR: 1ST PRIORITY
				if(isset($range))
				{
					$q1="SELECT * FROM tempphp.temptable2 WHERE category=".$catset."";
					$r1=mysql_query($q1);
					$i=0;
					while($row=mysql_fetch_array($r1))
					{
						$mprice=$row['mainPrice'];
						$j=0;
						$k=0;
						while($j!=strlen($mprice))
						{
							if(ord($mprice[$j])<=57&&ord($mprice[$j])>=48)
							{
								$m[$k]=$mprice[$j];
								$k++;
							}
							$j++;
						}
						$m=implode("", $m);
						if($range=="\"20000\"")
						{
							if($m<20000)
							{
								if($i==0)
								{
									$id[$i]=$row['id'];
								}
								else
								{
									$id[$i]=" or id=".$row['id']."";
								}
								$i++;
							}
						}
						else if ($range=="\"40000\"")
						{
							if($m<40000&&$m>=20000)
							{
								if($i==0)
								{
									$id[$i]=$row['id'];
								}
								else
								{
									$id[$i]=" or id=".$row['id']."";
								}
								$i++;
							}
						}
						else if ($range=="\"60000\"")
						{
							if($m<60000&&$m>=40000)
							{
								if($i==0)
								{
									$id[$i]=$row['id'];
								}
								else
								{
									$id[$i]=" or id=".$row['id']."";
								}
								$i++;
							}	
						}
						else
						{
							if($m>=60000)
							{
								if($i==0)
								{
									$id[$i]=$row['id'];
								}
								else
								{
									$id[$i]=" or id=".$row['id']."";
								}
								$i++;
							}
						}
						$m="";
					}
					$j=0;
					$q2="SELECT * FROM tempphp.temptable2 WHERE id=";
					while($j<$i)
					{
						$q2=$q2.$id[$j];
						$j++;
					}
					$strsql=$q2;
				}
				# IF NOTHING IS SELECTED, NO CATEGORY, NO BRAND AND NO SEARCH BOX TEXT: 2ND PRIORITY
				else if($search==""&&$getcat=="")
				{
					$strsql="SELECT * FROM tempphp.temptable2";
				}
				# IF A CATEGORY IS SELECTED BUT NO SEARCH BOX TEXT: 3RD PRIORITY
				else if ($search==""&&$getcat!="") {
					$strsql="SELECT * FROM tempphp.temptable2 WHERE category=".$t.$getcat.$t."";
					$j++;
				}
				# IF SOMETHING IS TYPED IN SEARCHBOX
				else
				{
					# IF A CATEGORY IS 'TYPED' IN SEARCHBOX EG: IF MOBILES IS TYPED: 4TH PRIORITY
					while($i==0&&$j<8)
					{
						$check=strcasecmp($search, $categories[$j]);
						$check2=strcasecmp($search, $categories[$j]."s");
						if($check==0||$check2==0)
						{
							$strsql="SELECT * FROM tempphp.temptable2 WHERE category=".$t.$categories[$j].$t."";
							$i++;
						}
						$j++;
					}
					# FOR ALL MOBILE BRANDS: IF A MOBILE'S BRAND NAME IS TYPED IN SEARCH BOX: 5TH PRIORITY
					if($j==8)
					{	
						$i=0;
						$j=0;
						$t="\"";
						while($i==0&&$j<8)
						{
							$check=strcasecmp($search, $mobiles[$j]);
							if($check==0)
							{
								if(isset($getcat))
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$mobiles[$j].$t." and category=".$t.$getcat.$t."";
								}
								else
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$mobiles[$j].$t."";
								}
								$i++;
							}
							$j++;
						}
					}
					# FOR ALL LAPTOP BRANDS: IF A LAPTOP'S BRAND NAME IS TYPED IN SEARCH BOX: 6TH PRIORITY
					if($j==8)
					{	
						$i=0;
						$j=0;
						$t="\"";
						while($i==0&&$j<6)
						{
							$check=strcasecmp($search, $laptops[$j]);
							if($check==0)
							{
								if(isset($getcat))
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$laptops[$j].$t." and category=".$t.$getcat.$t."";
								}
								else
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$laptops[$j].$t."";
								}
								$i++;
							}
							$j++;
						}
					}
					# FOR ALL TV BRANDS: IF A TV'S BRAND NAME IS TYPED IN SEARCH BOX: 7TH PRIORITY
					if($j==6)
					{	
						$i=0;
						$j=0;
						$t="\"";
						while($i==0&&$j<4)
						{
							$check=strcasecmp($search, $tvs[$j]);
							if($check==0)
							{
								if(isset($getcat))
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$tvs[$j].$t." and category=".$t.$getcat.$t."";
								}
								else
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$tvs[$j].$t."";
								}
								$i++;
							}
							$j++;
						}
					}
					# FOR ALL TV BRANDS: IF A TABLET'S BRAND NAME IS TYPED IN SEARCH BOX: 8TH PRIORITY
					if($j==4)
					{	
						$i=0;
						$j=0;
						$t="\"";
						while($i==0&&$j<6)
						{
							$check=strcasecmp($search, $tablets[$j]);
							if($check==0)
							{
								if(isset($getcat))
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$tablets[$j].$t." and category=".$t.$getcat.$t."";
								}
								else
								{
									$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=".$t.$tablets[$j].$t."";
								}
								$i++;
							}
							$j++;
						}
					}
					# IF NOTHING MATCHES DIRECTLY THEN PATTERN MATCHING: 9TH PRIORITY
					if($j==6) {				# REMEMBER TO CHANGE IF CONDITION AFTER ADDING A NEW CATEGORY TO THIS CODE
						# IF A CATEGORY NAME IS TYPED IN SEARCH BOX ALONG WITH THE DEVICE NAME TO BE SEARCHED
						$temp=explode(" ", $search);
						$i=0;
						$k=0;
						while($i<sizeof($temp))
						{
							$j=0;
							$k=0;
							while($j<8&&$k==0)
							{
								$check=strcasecmp($temp[$i], $categories[$j]);
								$check2=strcasecmp($temp[$i], $categories[$j]."s");
								if ($check==0||$check2==0) {
									$k++;
									$getcat=$categories[$j];
								}
								$j++;
							}
							if($k!=0)
							{
								break;
							}
							$i++;
						}
						if($k!=0)
						{
							$j=1;
							$temp2=$temp[0];
							while ($j<$i) {
								$temp2=$temp2." ".$temp[$j];
								$j++;
							}
							$search=$temp2;
						}
						$percent="%";
						$search2=$percent.$search.$percent;
						if(isset($getcat))
						{
							$strsql="SELECT * FROM tempphp.temptable2 WHERE name1 like ".$t.$search2.$t." and category=".$t.$getcat.$t."";
						}
						else
						{
							$strsql="SELECT * FROM tempphp.temptable2 WHERE name1 like ".$t.$search2.$t."";
						}
					}
				}

				# SEARCH BOX ENDS HERE!

				#FINAL QUERY EXECUTION FOR DISPLAYING PRODUCTS
				$cat=$_GET["category"];
				$brand=$_GET["brand"];
				$count=0;
				if(isset($cat)&&(!isset($brand)))
				{
					$strsql="SELECT * FROM tempphp.temptable2 WHERE category=" . $cat."";
				}
				if(isset($brand))
				{
					$strsql="SELECT * FROM tempphp.temptable2 WHERE brand=" . $brand." and category=" .$cat."";
				}
				$rs=mysql_query($strsql);
				$i=0;
				$j1=0;
				$flag=0;
				while($row=mysql_fetch_array($rs)){
					$strname1=$row['name1'];
					if($strname1!==null)
					{
						$count++;
						$strlink[$i]="products.php?id= ".$row['id']."";
						$strname[$i]=$row['name1'];
						$mLogo[$i]=$row['mainLogo'];
						$minPrice[$i]=$row['mainPrice'];
						$mlink[$i]=$row['linkmain'];
						$mImage[$i]=$row['imgsrc'];
						for($k=0;$k<$j1;$k++)
						{
							if($getcat2[$k]==$row['category'])
							{
								$flag=1;
							}
						}
						if($flag!=1)
						{
							$getcat2[$j1]=$row['category'];
							$j1++;
						}
						$flag=0;
						if($mLogo[$i]=="website logos\\croma.jpg")
						{
							$select[$i]="get";
						}
						else
						{
							$select[$i]="post";
						}
						$i++;

					}
				}
				# ARRAYS FOR CAROUSEL BRAND LOGOS
				$p1=$j1;
				$p=0;
				$ptemp=0;
				$j1=0;
				while($p<$p1)
				{
					for($catcheck=0;$catcheck<max($catlength);$catcheck++)
					{
						if($getcat2[$p]==$categories[$catcheck])
						{
							for($pcheck=0;$pcheck<$catlength[$catcheck];$pcheck++)
							{
								$catno[$ptemp]=$catcheck;
								if($catcheck==0)
								{
									$brandname[$ptemp]=$mobiles[$seqm[$pcheck]];
								}
								else if($catcheck==1)
								{
									$brandname[$ptemp]=$laptops[$seql[$pcheck]];
								}
								else if($catcheck==2)
								{
									$brandname[$ptemp]=$tablets[$pcheck];
								}
								else if($catcheck==3)
								{
									$brandname[$ptemp]=$tvs[$pcheck];
								}
								else if($catcheck==4)
								{
									$brandname[$ptemp]=$cameras[$pcheck];
								}
								$ptemp++;
							}
						}
					}
					#QUERY EXECUTION FOR DISPLAYING AND LINKING CAROUSEL BRAND LOGOS
					$strsql2="SELECT * FROM tempphp.temptable2 WHERE category=" .$t.$getcat2[$p].$t."";
					$rq2=mysql_query($strsql2);
					$flag=0;
					while($row=mysql_fetch_array($rq2)){
						$strname1=$row['name1'];
						if($strname1!==null)
						{
							for($k=0;$k<$j1;$k++)
							{
								if($brandcarousel[$k]==$row['brandlogobig'])
								{
									$flag=1;
								}
							}
							if($flag!=1)
							{
								$brandcarousel[$j1]=$row['brandlogobig'];
								$brandcarousels[$j1]=$row['brandlogosmall'];
								$j1++;
							}
							$flag=0;
						}
					}
					$p++;
				}
				$j=0;
			?>
<script type="text/javascript">



        
        $(document).ready(function() {
        
            $('#myCarousel2').carousel({
  interval: 4000
})

$('.carousel .item').each(function(){
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
<script type="text/javascript">
	/*function small(id)
	{
		document.getElementById(id).style.background="#eee url('<?php $i33=0; while ($i33<$j1) {
			echo $brandcarousels[$i33];
			$i33++;
		}?>') 15px no-repeat";
	}
	function change(id)
	{
		document.getElementById(id).style.background="#424242";
		document.getElementById(id).style.color="#FFD700";
		document.getElementById(id).style.padding-left="0px";
	}*/
</script>
<style type="text/css">


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

.carou{
	margin-top: 0; 
	margin-bottom: 20px;
}
.carousel-inner .active.left { left: -25%; }
.carousel-inner .next        { left:  25%; }
.carousel-inner .prev		 { left: -25%; }
/*.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
@media (max-width: 767px) {
	.carousel .carousel-inner .active.left { left: -100%; }
	.carousel .carousel-inner .next        { left:  100%; }
	.carousel .carousel-inner .prev		 { left: -100%; }
	.carousel .active > div { display:none; }
	.carousel .active > div:first-child { display:block; }

}
@media (min-width: 767px) and (max-width: 992px ) {
	.carousel .carousel-inner .active.left { left: -50%; }
	.carousel .carousel-inner .next        { left:  50%; }
	.carousel .carousel-inner .prev		 { left: -50%; }
	.carousel .active > div { display:none; }
	.carousel .active > div:first-child { display:block; }
	.carousel .active > div:first-child + div { display:block; }
}
@media (min-width: 992px ) {
	.carousel .carousel-inner .active.left { left: -25%; }
	.carousel .carousel-inner .next        { left:  25%; }
	.carousel .carousel-inner .prev		 { left: -25%; }	
}*/

/* CAROUSEL */
/*.img-responsive{
	width:100%;
	height: auto;
}

@media(min-width: 992px){
	.carousel-inner .active.left{
		left: -25%;
	}
	.carousel-inner .next{
		left: 25%;
	}
	.carousel-inner .prev{
		left: -25%;
	}
}

@media(min-width: 768px)and(max-width: 991px){
	.carousel-inner .active.left{
		left: -33.3%;
	}
	.carousel-inner .next{
		left: 33.3%;
	}
	.carousel-inner .prev{
		left: -33.3%;
	}
	.active > div:{
		display: none;
	}
	.active > div:first-child{
		display: block;
	}
	.active > div:first-child + div{
		display: block;
	}
	
}

@media(max-width: 767px){
	.carousel-inner .active.left{
		left: -100%;
	}
	.carousel-inner .next{
		left: 100%;
	}
	.carousel-inner .prev{
		left: -100%;
	}
	.active > div{
		display: none;
	}
	.active > div:first-child{
		display: block;
	}
}

.carousel-control.left, .carousel-control.right{
	background-image: none;
}*/

/* SIDE NAVBAR STYLE */
.cattext{
	text-align: center;
	font-size:30px;
	margin-top: 15px;
    margin-bottom: 15px;
    width: 180px;
    border-radius: 10px;
    color: #FFD700;
    /*transition: all 0.3s ease 0s;*/
    border: #FFD700 2px solid;
    height: 45px;
}


/*.cattext:hover{
                background-color: #424242;
                color: #FFD700;
                padding-left: ;
                width: 220px;
                text-align: center;
                background: #424242 url('img/category.png') 15px center no-repeat
                                box-shadow: inset 0 0 0 2px #FFD700;
                border: 0;
            }*/

            .btnreq {
                font-size: 20px;
                background-color: #757575;
                border: #212121 1px solid;
                border-radius: 15px;
               	width: 140px;
                height: 40px;
                margin-left: 0px;
                margin-bottom: 50px;
               
            }
            .btnreq:hover {
                background-color: #424242;
                color: #9e9e9e;
                box-shadow: inset 0 0 0 1px #9e9e9e;
                border: 0;
               
                
            }


.prodtext {
                text-align: center;
                font-size: 30px;
                margin-top: 15px;
                width: 170px;
                color: #FFD700;
                float: left;
                border-radius: 10px;
                                margin-bottom: 15px;
                margin-left: 15px;
                border: #FFD700 2px solid;
                height: 45px;

            }
           /* .prodtext:hover{
                background-color: #424242;
                color: #9e9e9e;
                padding-left: 25px;
                width: 200px;
                text-align: center;
                background: #424242 url('img/notebook.png') 15px center no-repeat;
                box-shadow: inset 0 0 0 2px #9e9e9e;
                border: 0;
            }*/

            li a:hover, .name a:hover{
	text-decoration: none;
}

.w3-card-8{
	padding:30px;
}

#bck1{
	background-color:rgba(238,238,238,0.6);
    color:	#ffc400;

    
}

#bck1:hover{
	background-color:rgba(238,238,238,1);
    color:#424242;
    box-shadow: 0px 0px 8px #FF0009;
    border:0;
}


/*.nav-stacked a{
	color: white;
	padding: 2px;
	transition: all 0.3s ease 0s;
}

.nav-stacked a:hover{
	color: red;
}*/

/*#brandtry{
	transition: all 0.5s ease 0s;
	color: #FFD700;
}

#brandtry:hover{
	text-decoration:none;
	background-color:#eee;
	padding-left: 60px;
	color: #424242;
}*/

.nav>li>a{
	transition: all 0.5s ease 0s;
	color: #FFD700;
}

.nav>li>a:focus,.nav>li>a:hover{
	text-decoration:none;
	
	padding-left: 60px;	
	color: #424242;
}



/*#brand1:hover{
	background: #eee url("<?php 
		$i33=0; 
		while($i33<$j1) 
		{ echo @$brandcarousels[$i33]; 
			$i33++;
			} 
			?>") 15px no-repeat;
}*/
/*#brand2:hover{
	background: #eee url('mobiles/samsungsmall.jpg') 15px no-repeat
}

#brand3:hover{
	background: #eee url('mobiles/htcsmall.jpg') 15px no-repeat
}

#brand4:hover{
	background: #eee url('mobiles/applesmall.jpg') 15px no-repeat
}
#brand5:hover{
	background: #eee url('mobiles/lenovosmall.jpg') 15px no-repeat
}

#brand6:hover{
	background: #eee url('mobiles/lgsmall.jpg') 15px no-repeat
}

#brand7:hover{
	background: #eee url('mobiles/motorolasmall.jpg') 15px no-repeat
}

#brand8:hover{
	background: #eee url('mobiles/sonysmall.jpg') 15px no-repeat
}*/
.w3-card-8{
	box-shadow: #FFD700;
}

.panel-group{
	margin-top: 17px;
}
.brands_products{
	padding-top: 14px;
}
.containernew{
	border-radius: 2px solid red;
	margin-top: 10px;
	margin-right: 10px;
	margin-left: 10px;
	background-color: red;
}

.category{
	margin-left: 10px;
	margin-top: 5px;
	box-shadow: 0 0 10px #FFD700;
	padding-bottom: 10px;
	background-color: #424242;
	border-radius: 5px;
}

.prod{
	margin-left: 20px;
	margin-top: 5px;
	box-shadow: 0 0 20px #FFD700;
	background-color: #424242;
	border-radius: 5px;
}

.prod1{
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 30px;
	padding-right: 30px;
	border:1px solid black;
	margin-bottom: 20px;
	height: 200px;
}



.prodno{
	color: #FFD700;
	margin-bottom: 20px;
	font-size: 25px;
	padding-left: 10px;
}

.prod_im{
	max-height: 100%;
	max-width: 100%;
	
}



.prodname{
	
	margin-left: 50px;
	font-size: 30px;
	text-shadow: 0 0 3px black;
}


.prodprice{
	
	margin-left: 50px;
	font-size: 20px;
	text-shadow: 0 0 3px black;
}


.sublogos{
	border: 0;
	padding-top: 2px;
	padding-bottom: 2px;
	height: 40px;
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

#brandXiaomi:hover{
	background: #eee url('mobiles\\mismall.jpg') 15px no-repeat;
	}
#brandHTC:hover{
	background: #eee url('mobiles\\htcsmall.jpg') 15px no-repeat;
}
#brandSamsung:hover{
	background: #eee url('mobiles\\samsungsmall.jpg') 15px no-repeat;
	}
#brandLenovo:hover{
	background: #eee url('mobiles\\lenovosmall.jpg') 15px no-repeat;
}
#brandLG:hover{
	background: #eee url('mobiles\\lgsmall.jpg') 15px no-repeat;
	}
#brandApple:hover{
	background: #eee url('mobiles\\applesmall2.jpg') 15px no-repeat;
}
#brandMotorola:hover{
	background: #eee url('mobiles\\motorolasmall.jpg') 15px no-repeat;
	}
#brandSony:hover{
	background: #eee url('mobiles\\sonysmall.jpg') 15px no-repeat;
}
#brandAcer:hover{
	background: #eee url('laptops\\acersmall.jpg') 15px no-repeat;
	}
#brandAsus:hover{
	background: #eee url('laptops\\asussmall.jpg') 15px no-repeat;
}
#brandDell:hover{
	background: #eee url('laptops\\dellsmall.jpg') 15px no-repeat;
	}
#brandHP:hover{
	background: #eee url('laptops\\hpsmall.jpg') 15px no-repeat;
}
#brandiBall:hover{
	background: #eee url('tablets\\iballsmall.jpg') 15px no-repeat;
}
#brandMicromax:hover{
	background: #eee url('tablets\\micromaxsmall.jpg') 15px no-repeat;
}
#brandPhilips:hover{
	background: #eee url('TVs\\philipssmall.jpg') 15px no-repeat;
}
#brandCanon:hover{
	background: #eee url('cameras\\canonsmall.jpg') 15px no-repeat;
}
#brandNikon:hover{
	background: #eee url('cameras\\nikonsmall.jpg') 15px no-repeat;
}
#brandPanasonic:hover{
	background: #eee url('cameras\\panasonicsmall.jpg') 15px no-repeat;
}
#brandFujifilm:hover{
	background: #eee url('cameras\\fujifilmsmall.jpg') 15px no-repeat;
}


</style>
</head>
<body style="background-image: url('Images/greybg2.jpg');">

				
		
<!--<div id="tfheader" class="wrapper">
		<form id="tfnewsearch" method="get" action="https://www.flipkart.com/search?q=">
	        <input type="text" class="tftextinput" name="q"><span id="category"><select name="category-selection" class="ccategory">
				<option value="All" selected disabled>All Categories</option>
				<option value="women">Women</option>
				<option value="men">Men</option>
				<option value="children">Children</option>
				<option value="home">Home</option>
				<option value="electronics">Electronics</option></select></span><input type="submit" value="SEARCH" class="tfbutton">
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

<div class="carou">
	  
	      <div class="carousel slide" id="myCarousel2" data-type="multi" data-interval="2000" data-ride="carousel">
	        <div class="carousel-inner">
	       <?php
	       	$k1=0;
            while($k1<$j1)
			{
				if($k1==0)
				{
			?>
	          <div class="item active">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php?brand= "<?php echo @$brandname[$k1];?>"&category="<?php echo @$categories[$catno[$k1]];?>"'><img src="<?php echo@$brandcarousel[$k1]; ?>" class="img-responsive"></a></div>
	          </div>
            <?php
        	}
        	else
        	{
        	?>
	          <div class="item">
	            <div class="col-md-3 col-sm-6 col-xs-12"><a href='categorylist.php?brand= "<?php echo @$brandname[$k1];?>"&category="<?php echo @$categories[$catno[$k1]];?>"'><img src="<?php echo@$brandcarousel[$k1]; ?>" class="img-responsive"></a></div>
	          </div>

        	<?php
        	}
			$k1++;
			}
			?>
	        </div>
	        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
  	  
	</div>

<!--SIDE NAVBAR-->
<div class="containernew">
	<div class="siderow">
		<div class="category col-md-3">
			<div class="brands-list">
			<?php
				$i22=0;
				$j22=0;
				$tt=0;
				while($i22<$p1)
				{
					$j22=0;
					$t=$catlength2[$getcat2[$i22]];
					?>
				<div class="cattext text-capitalize"><?php echo @$getcat2[$i22]?>s</div>
					<div class="brands-name" style="border-radius: 10px;" id="bck2">
                                <ul class="nav nav-pills nav-stacked" id="brandtry">
                                	<?php
                                		while($j22<$t)
                                		{
                                			?>
                                    <li><a href='categorylist.php? category="<?php echo @$getcat2[$i22]?>"&brand="<?php echo @$brandname[$j22+$tt]?>"' id="brand<?php echo @$brandname[$j22+$tt];?>" ><?php echo @$brandname[$j22+$tt]?></a></li>
                                    <?php
                                    	$j22++;
                                    }
                                    ?>
                                </ul>
                            </div>
                                <?php
                                    $i22++;
                                    $tt=$tt+$t;
                                }?>

                        </div><!--/brands_products-->
                </div>
                <div class="prod col-md-8" id="bigDiv">
                    <div class="row" style="margin-bottom:15px;">
                    <div class="prodtext">Products</div>
                    </div>
                    <div><p class="prodno">
                    <?php 
                    	if($count==1)
                    	{
                    		echo $count;
                    ?> product found out of
                    <?php
                    	echo $total;
                    ?> products
                    <?php
                    	}
                    	else if($count!=0)
                    	{
                    		echo $count;
                    ?> products found out of
                    <?php
                    	echo $total;
                    ?> products
                    <?php
                    	}
                    	else
                    	{
                    ?>Sorry, no products found!
                    <?php
                    	}
                    ?>
                    </p></div>
                    <?php
                    while($j<$i)
					{
					?>
                    <div class='prod1' style='border-radius: 10px;' id='bck1' onclick="location.reload();location.href='<?php echo @$strlink[$j];?>'">
                            <div class="col-md-3" style='width: 180px; height: 180px;'><img class='prod_im' src="<?php echo@$mImage[$j] ?>" id="imgimg" style="border-radius: 10px;"></div>
                            <div class="col-md-9">
                        	<p class='prodname' id='prod-name'><?php echo@$strname[$j]?></p>
                        	<form method="<?php echo @$select[$j];?>" action="<?php echo@$mlink[$j]?>" target="_blank">
                            <div id='shop-button'>
                                <button type='submit' id='reqbut'  value = 'req' name='reqbut' class='btnreq pull-right'>Shop Now</button>
                            </div>
                        </form>
                        	<p class='prodprice' id='prod-price'><span><?php echo@$minPrice[$j]?></span> available at <img src="<?php echo@$mLogo[$j]?>" class='sublogos'></p></div>
                    </div>
                    <?php
					$j++;
					}
					?>
                </div>
            </div>
        </div>
    </body>
</html>