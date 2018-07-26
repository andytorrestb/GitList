<!DOCTYPE HTML>
<!--
	Faction by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
        <title>Untitled</title>
    
		<?php include(BASE_PATH.'/includes/head.php'); ?>
		
	</head>
	<body class="is-preload">

        <?php //echo "<pre>"; print_r($_SERVER); echo "</pre>"; ?>

		<!-- Header -->
			<header id="header">

				<?php include(BASE_PATH.'/includes/navbar.php'); ?>

			</header>

		<!-- Wrapper -->
			<div class="wrapper">

				<!-- Main -->
					<section class="main">
						<section>

							<header>
								<h1>Generic</h1>
								<p>Consectetur adipisicing elit</p>
							</header>
							<div id="app" class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Tags</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="(item,index) in items">
											<td><a :href="item.url">#{{index + 1}}. {{item.name}}</a></td>
											<td>{{item.description}}</td>
											<td>{{item.tags}}</td>
											<td>{{item.date}}</td>												
										</tr>		
									</tbody>
								</table>										
							</div>
						</section>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<section class="info">
						<h3>About Us</h3>
						<div class="about">
							<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur malesuada.</p><p>Sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="team">
							<article>
								<span class="image"><img src="images/pic06.jpg" alt=""></span>
								<p>
									<strong class="name">John Doe</strong>
									<span class="title">Lorem semper magna etiam</span>
								</p>
							</article>
							<article>
								<span class="image"><img src="images/pic07.jpg" alt=""></span>
								<p>
									<strong class="name">Jane Anderson</strong>
									<span class="title">Etiam feugiat adipiscing veroeros</span>
								</p>
							</article>
							<article>
								<span class="image"><img src="images/pic08.jpg" alt=""></span>
								<p>
									<strong class="name">Mike Smith</strong>
									<span class="title">Consequat nulla dolor blandit</span>
								</p>
							</article>
						</div>
					</section>
					<section class="contact">
						<h3>Contact Us</h3>
						<ul class="contact-icons">
							<li class="icon fa-home"><a href="#">1234 Somewhere Road #80486<br>Nashville, TN 00000</a></li>
							<li class="icon fa-phone"><a href="#">(800) 555-0000 x12345</a></li>
							<li class="icon fa-envelope"><a href="#">hello@untitled.tld</a></li>
							<li class="icon fa-facebook"><a href="#">facebook.com/untitled-tld</a></li>
							<li class="icon fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
            <?php include(BASE_PATH.'/includes/scripts.php'); ?>
			<script>

				var app = new Vue({
					el: '#app',
					data: {
						items: []
					},					
					mounted: function() {
					    console.log('mounted');
					    $.getJSON('/GitList/data/diy-repos.json', function(data) {
					        app.items = data;
					    });
					}
				});

				

			</script>
            

	</body>
</html>