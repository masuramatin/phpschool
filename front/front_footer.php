	<?php
	$mysql = 
	//select query
		$sql = "select * from school_front_footer where status=1 limit 100";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {

				?>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading"><?php print $row['title']; ?></h5>
					<address>
						<a href="<?php print $row['link']; ?>"><?php print $row['content']; ?></a>
					</address>
				</div>
			</div>
			
			<?php
				$i++;
            }
            ?>
			<div class="col-lg-4">
			
			
			<?php
	$mysql = 
	//select query
		$sql = "select * from school_front_footer_middle_part where status=1 limit 100";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {

				?>
				<div class="widget">
					<h5 class="widgetheading"><?php print $row['page']?></h5>
					<ul class="link-list">
						<li><a href="<?php print $row['link1']?>"><?php print $row['page_release']?></a></li>
						<li><a href="<?php print $row['link2']?>"><?php print $row['page_term']?></a></li>
						<li><a href="<?php print $row['link3']?>"><?php print $row['page_policy']?></a></li>
						<li><a href="<?php print $row['link4']?>"><?php print $row['page_career']?></a></li>
						<li><a href="<?php print $row['link5']?>"><?php print $row['page_contact']?></a></li>
					</ul>
				</div>
				
				<?php
				$i++;
            }
            ?>
			
			</div>
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright">
					
					
					<?php
	$mysql = 
	//select query
		$sql = "select * from school_footer_bottom where status=1 limit 100";
	//query execution
		$result=mysqli_query($con,$sql);
	//fetch data from result set
$i=1;
            while ($row = mysqli_fetch_array($result)) {

				?>

						<p class="text-center">
							<span>&copy; <a href="<?php print $row['link']; ?>"><?php print $row['author']; ?></a> All right reserved.</span>
						</p>
						
						
						<?php
				$i++;
            }
            ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	
			
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/animate.js"></script>
<!-- nivo slider js -->
<script src="js/slider/jquery.nivo.slider.pack.js"></script>
<!-- nivo active js -->
<script src="js/slider/nivo-active.js"></script>
<script src="js/custom.js"></script>



</body>
</html>

