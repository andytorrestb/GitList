<!DOCTYPE HTML>
<!--
	Editorial by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="node_modules/balloon-css/balloon.css">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">

					<?php include(__DIR__.'/includes/navbar.php'); ?>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>JavaScript</h1>
									</header>

									<!--<h4>7/10/2018</h4>-->
                                    <div id="app" class="table-wrapper">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
                                                    <th>Publisher</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item,index) in items">
                                                    <td><a :href="item.url">#{{index+1}}. {{item.name}}</a></td>
                                                    <td>{{item.description}}</td>
                                                    <td>{{item.date}}</td>
                                                    <td><a href="#" class="icon fa-github alert"><span class="label">Twitter</span></a></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

								</section>

						</div>
					</div>



			</div>

		<!-- Scripts -->
			<?php include(__DIR__.'/includes/'); ?>
			<script>
			



    $.getJSON('data/javascript-repositories.json', function(data) {
                    app.items = data;
                });




                var app = new Vue({
                    el: '#app',
                    data: {
                        items: []
                    }
				});


				

				$(document).on("click", ".alert", function(e) {
					bootbox.alert("Hello world", function() {
						console.log("Alert Callback");
					});
				});

			









			</script>

	</body>
</html>