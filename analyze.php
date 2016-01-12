<!DOCTYPE html>
<html lang="en">

<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Mood Analyzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/controlfrog.css" rel="stylesheet" media="screen">   
	<link href="http://leapfrogui.com/controlfrog-v1.4/cf/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>    
	<script src="js/moment.js"></script>	
	<script src="js/easypiechart.js"></script>
	<script src="js/gauge.js"></script>	
	<script src="js/chart.js"></script>
	<script src="js/jquery.sparklines.js"></script>			
    <script src="js/bootstrap.js"></script>
    <script src="js/controlfrog-plugins.js"></script>
    

    
    
	<script>
		var themeColour = 'black';
	</script>
    <script src="http://leapfrogui.com/controlfrog-v1.4/cf/js/controlfrog.js"></script>
</head>
<body class="black">
	
	<div class="cf-nav cf-nav-state-min">
		<a href="#" class="cf-nav-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		
		<ul>
			<li class="cf-nav-shortcut">
				<a href="layout-1.html">
					<span class="cf-nav-min">1</span>
					<span class="cf-nav-max">Layout 1</span>
				</a>
			</li>
			<li class="cf-nav-shortcut">
				<a href="layout-2.html">
					<span class="cf-nav-min">2</span>
					<span class="cf-nav-max">Layout 2</span>
				</a>
			</li>
			<li class="cf-nav-shortcut">
				<a href="layout-3.html">
					<span class="cf-nav-min">3</span>
					<span class="cf-nav-max">Layout 3</span>
				</a>
			</li>
			<li class="current cf-nav-shortcut">
				<a href="layout-4.html" class="current active">
					<span class="cf-nav-min">4</span>
					<span class="cf-nav-max">Layout 4</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="cf-nav-min">&bull;</span>				
					<span class="cf-nav-max">Example with no shortcut</span>
				</a>
			</li>
		</ul>
	</div>
	
	<div class="cf-container cf-nav-active">

		<div class="row">
			<div class="col-sm-6 cf-item">
				<div class="inner">
					<header>
						<p><span></span>Gauge</p>
					</header>
					<div class="content cf-gauge" id="cf-gauge-1">
						<div class="val-current">
							<div class="metric" id="cf-gauge-1-m">90</div>
						</div>
						<div class="canvas">
							<canvas id="cf-gauge-1-g"></canvas>
						</div>
						<div class="val-min">
							<div class="metric-small">0</div>
						</div>
						<div class="val-max">
							<div class="metric-small">0</div>						
						</div>
					</div>
				</div> <!-- //end inner -->
				<div class="row">
					<div class="col-sm-4 cf-item">
						<header>
									<p><span></span>Metric &amp; Sparkline</p>
								</header>
								<div class="content">
									<div class="cf-svmc-sparkline">
										<div class="cf-svmc">
											<div class="metric">3292</div>
											<div class="change m-green metric-small">
												<div class="arrow-up"></div>
												<span class="large">32<span class="small">.45%</span></span>
											</div>
										</div>
										<div class="cf-sparkline clearfix">
											<div id="spark-1" class="sparkline"></div>
											<div class="sparkline-value">
												<div class="metric-small">0</div>
											</div>
										</div>
									</div>
								</div>
					</div> <!-- //end cf-item -->
					<div class="col-sm-4 cf-item">
						<header>
							<p><span></span>Single value pie chart</p>
						</header>
						<div class="content cf-svp clearfix" id="svp-1">
							<div class="chart" data-percent="72" data-layout="l-6-4"></div>
							<div class="metrics">
								<span class="metric">72</span>
								<span class="metric-small">%</span>
							</div>						
						</div>
					</div> <!-- //end cf-item -->
					<div class="col-sm-4 cf-item">
						<header>
							<p><span></span>Single metric &amp; change</p>
						</header>
						<div class="content">
							<div class="cf-svmc">
								<div class="metric">3292</div>
								<div class="change m-red metric-small">
									<div class="arrow-down"></div>
									<span class="large">32<span class="small">.45%</span></span>
								</div>
							</div>
						</div>
					</div> <!-- //end cf-item -->					
				</div> <!-- // end row -->
			</div> <!-- //end col -->
			<div class="col-sm-6 cf-item">
				<div class="inner">
					<header>
						<p><span></span>RSS Feed</p>
					</header>
					<div class="content cf-rss">
						<div id="cf-rss-5" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<blockquote class="twitter-tweet" lang="en"><p>Browserfrog - A responsive, HTML/CSS alternative to raster- and vector-based browser frames for screenshots: <a href="http://t.co/oGnnWgs2JA">http://t.co/oGnnWgs2JA</a></p>&mdash; WrapBootstrap (@wrapbootstrap) <a href="https://twitter.com/wrapbootstrap/statuses/339847006212194305">May 29, 2013</a></blockquote>
								</div>
								<div class="item">
									<blockquote class="twitter-tweet" lang="en"><p>Browserfrog - A responsive, HTML/CSS alternative to raster- and vector-based browser frames for screenshots: <a href="http://t.co/oGnnWgs2JA">http://t.co/oGnnWgs2JA</a></p>&mdash; WrapBootstrap (@wrapbootstrap) <a href="https://twitter.com/wrapbootstrap/statuses/339847006212194305">May 29, 2013</a></blockquote>
								</div>
								<div class="item">
									<blockquote class="twitter-tweet" lang="en"><p>Browserfrog - A responsive, HTML/CSS alternative to raster- and vector-based browser frames for screenshots: <a href="http://t.co/oGnnWgs2JA">http://t.co/oGnnWgs2JA</a></p>&mdash; WrapBootstrap (@wrapbootstrap) <a href="https://twitter.com/wrapbootstrap/statuses/339847006212194305">May 29, 2013</a></blockquote>
								</div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#cf-rss-5" data-slide-to="0" class="active"></li>
								<li data-target="#cf-rss-5" data-slide-to="1"></li>
								<li data-target="#cf-rss-5" data-slide-to="2"></li>
							</ol>
						</div>
					</div>
				</div> <!-- //end inner -->
				<div class="row">
					<div class="col-sm-4 cf-item">
						<!--
	Display the time and date
	For 12hr clock add class 'cf-td-12' to the 'cf-td' div
-->

<header>
	<p><span></span>Time &amp; date</p>
</header>
<div class="content">
	<div class="cf-td cf-td-12">
		<div class="cf-td-time metric">12:00</div>
		<div class="cf-td-dd">
			<p class="cf-td-day metric-small">Monday</p>
			<p class="cf-td-date metric-small">1st October, 2013</p>
		</div>
	</div>
</div>
					</div> <!-- //end cf-item -->
					<div class="col-sm-4 cf-item">
						<header>
							<p><span></span>RAG Bars</p>
						</header>
						<div class="content">
							<div id="cf-rag-1" class="cf-rag"></div>
						</div>
					</div> <!-- //end cf-item -->
					<div class="col-sm-4 cf-item">
						<header>
	<p><span></span>Single metric &amp; change</p>
</header>
<div class="content">
	<div class="cf-svmc">
		<div class="metric">3292</div>
		<div class="change m-green metric-small">
			<div class="arrow-up"></div>
			<span class="large">32<span class="small">.45%</span></span>
		</div>
	</div>
</div>

					</div> <!-- //end cf-item -->					
				</div> <!-- // end row -->
			</div> <!-- //end col -->
		</div>
	</div> <!-- //end container -->

</body>

<!-- Mirrored from leapfrogui.com/controlfrog-v1.4/cf/layouts/b/layout-4.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 02 Oct 2015 14:11:40 GMT -->
</html>