<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Williams College</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<!--Nivo slider css-->
<link rel="stylesheet" href="css/nivo-slider.css">
<!--Nivo slider custom css-->
<link rel="stylesheet" href="css/slider.css">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" />
</head>
<body>
<?php
//session_start();
//connect with database
include "../db/connection.php";

?>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
				<?php
	$mysql = 
	//select query
		$sql = "select * from school_font_logo where status=1 limit 100";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
				?>
                    <a class="navbar-brand" href="index.html"><span><?php print $row['school_name_first']; ?></span> <?php print $row['school_name_last']; ?></a>
				<?php
				$i++;
            }
            ?>
                </div>
                <div class="navbar-collapse collapse">
	<?php
	$mysql = 
	//select query
		$sql = "select * from school_front_menu where status=1 order by id desc";
	//query execution
		$result=mysqli_query($con,$sql);
		
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {
				?>				
				
                    <ul class="nav navbar-nav">

						<li><a href="<?php print $row['link']; ?>"><?php print $row['menu']; ?></a></li>
<!--                        
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Message <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li></li>

                            </ul>
                        </li>
                        <li></li>
-->                        
                    </ul>
			<?php
				$i++;
            }
            ?>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->