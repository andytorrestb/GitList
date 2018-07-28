<!DOCTYPE HTML>
<!--
	Faction by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
        <title>Untitled</title>
    
		<?php include('includes/head.php'); ?>
		
	</head>
	<body class="is-preload">

        <?php //echo "<pre>"; print_r($_SERVER); echo "</pre>"; ?>

		<!-- Header -->
			<header id="header">

				<?php include('includes/navbar.php'); ?>
				
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

	<!-- Footer & Repeating Scripts -->
	<?php include('includes/footer.php'); ?>
			<script>
			
			var app = new Vue({
					el: '#app',
					data: {
						items: []
					},					
					mounted: function() {
					    console.log('mounted');
					    $.getJSON('/GitList/data/libraries-repos.json', function(data) {
					        app.items = data;
					    });
					}
				});

			</script>
            

	</body>
</html>