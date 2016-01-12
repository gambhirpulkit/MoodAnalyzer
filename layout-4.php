<?php
include('config.php');
$tbl_score = $db -> tbl_score;
session_start();


$fetch_score = $tbl_score -> findOne(array('_id' => $_SESSION["id"]));

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from leapfrogui.com/controlfrog-v1.4/cf/layouts/b/layout-2.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Oct 2015 14:11:40 GMT -->
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Mood Analyzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://leapfrogui.com/controlfrog-v1.4/cf/css/bootstrap.css" rel="stylesheet">
    <link href="http://leapfrogui.com/controlfrog-v1.4/cf/css/controlfrog.css" rel="stylesheet" media="screen">   

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>    
	<script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/moment.js"></script>	
	<script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/easypiechart.js"></script>
	<script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/gauge.js"></script>	
	<script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/chart.js"></script>
	<script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/jquery.sparklines.js"></script>			
    <script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/bootstrap.js"></script>
    <script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/controlfrog-plugins.js"></script>
    
    <!--[if lt IE 9]>
		<script src="../../js/respond.min.js"></script>
		<script src="../../js/excanvas.min.js"></script>
	<![endif]-->
    
    
	<script>
		var themeColour = 'black';
	</script>
    <script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/controlfrog.js"></script>
</head>
<?php 
$val = $fetch_score['total'];
	
	if($val >= 0) {
		$color = black;
	}
	else {
		$color = red;
	}
	?>
<body class="<?php echo $color; ?>">
	
	<div class="cf-nav cf-nav-state-min">
		<a href="#" class="cf-nav-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		
		<ul>
			<li class="cf-nav-shortcut">
				<a href="layout-4.php"  class="current active">
					<span class="cf-nav-min">1</span>
					<span class="cf-nav-max">Home</span>
				</a>
				<a href="index.php"  >
					<span class="cf-nav-min">2</span>
					<span class="cf-nav-max">Logout</span>
				</a>
			</li>
			
		</ul>
	</div>
	<?php 
	$per = (($fetch_score['pos']*$fetch_score['pos_count'])*100)/(($fetch_score['pos']*$fetch_score['pos_count'])+(-$fetch_score['neg']*$fetch_score['neg_count']));
	?>
	<div class="cf-container cf-nav-active">

		<div class="row">
			<div class="col-sm-6 cf-item">
				<header>
					<p><span></span>Percentage of positivity</p>
				</header>
				<div class="content cf-svp clearfix" id="svp-1">
					<div class="chart" data-percent="<?php echo $per; ?>" data-layout="l-6">
						<div class="metrics">
							<span class="metric"><?php echo number_format($per); ?></span>
							<span class="metric-small">%</span>
						</div>
					</div>
				</div>
			</div> <!-- //end col -->
			<div class="col-sm-6 cf-item">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 cf-item">
														<header>
	<p><span></span>No. of positive tweets</p>
</header>
<div class="content">
	<div class="cf-yn">
		<div class="metric m-green">
			<?php echo $fetch_score['pos_count']; ?>
		</div>
	</div>
</div>

							</div> <!-- //end cf-item -->
							<div class="col-sm-6 cf-item">
						<header>
	<p><span></span>No. of negative tweets</p>
</header>
<div class="content">
	<div class="cf-yn">
		<div class="metric m-red">
			<?php echo $fetch_score['neg_count']; ?>
		</div>
	</div>
</div>

							</div> <!-- //end cf-item -->
						</div> <!-- //end row -->
						<div class="row">
							<div class="col-sm-6 cf-item">
								<!--
	Display the time and date
	For 12hr clock add class 'cf-td-12' to the 'cf-td' div
-->
						<header>
	<p><span></span>No. of neutral tweets</p>
</header>
<div class="content">
	<div class="cf-yn">
		<div class="metric m-amber">
			<?php echo $fetch_score['net_count']; ?>
		</div>
	</div>
</div>

							</div> <!-- //end cf-item -->
							<div class="col-sm-6 cf-item">
								<header>
									<p><span></span>Mood Activity</p>
								</header>
								<div class="content cf-line" id="cf-line-1">
									<canvas id="cf-line-1-c" width="0" height="0"></canvas>
								</div>
							</div> <!-- //end cf-item -->
						</div> <!-- //end row -->						
					</div> <!-- //end col -->
				</div> <!-- //end row -->
			</div> <!-- // end cf-item -->
		</div> <!-- //end row -->

	</div> <!-- //end cf-container -->
</body>

<!-- Mirrored from leapfrogui.com/controlfrog-v1.4/cf/layouts/b/layout-2.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Oct 2015 14:11:40 GMT -->
</html>