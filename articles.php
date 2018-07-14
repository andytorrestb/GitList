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
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">

									
<!-- Logo -->
<span class="logo">
		<a href="index.html">Lit Gits</a>
		<span></span>
	</span>

									
										<!-- Nav -->
				<?php include(__DIR__.'/includes/navbar.php'); ?>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Articles</h1>



									</header>

													<div id="app" class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>Source</th>
																	<th>Description</th>
																	<th>Date</th>
																	<th>Tech Used</th>
																	
																</tr>
															</thead>
															<tbody>
																<tr v-for="(item,index) in items">
																	<td><a :href="item.url">#{{index+1}}. {{item.source}}</a></td>
																	<td>{{item.description}}</td>
																	<td>{{item.date}}</td>
																	<td>{{item.techUsed}}</td>
																</tr>																
															</tbody>
														</table>
													</div>

								</section>

						</div>
					</div>

			

			</div>

		<!-- Scripts -->
			<?php include(__DIR__.'/includes/scripts.php'); ?>
			<script>

				var my_items = [
					createJsRepositoryObject("Hackernoon", "https://hackernoon.com/15-html-element-methods-youve-potentially-never-heard-of-fc6863e41b2a", "15 JavaScript methods for interacting with HTML elements", "7/10/2018", "HTML, JS"),
					createJsRepositoryObject("FreeCodeCamp", "https://medium.freecodecamp.org/learn-these-javascript-fundamentals-and-become-a-better-developer-2a031a0dc9cf", "A short review of Javascript's fundamentals. Topics covered are primitives, objects, variables, and functions.", "7/10/2018", "JS"),
					createJsRepositoryObject("Github", "https://guides.github.com/features/wikis/", "A simple guide for documenting projects on Github", "7/12/2018", "Git"),
					createJsRepositoryObject("Dev.to", "https://dev.to/pratikaambani/a-meaningful-readmemd-565a", "A more in depth guide to documenting projects", "7/12/2018", "Git"),
					createJsRepositoryObject("FreeCodeCamp", "https://medium.freecodecamp.org/a-massive-free-guide-to-css-flexbox-c6e009d33bf8", "A free massive guide to CSS Flexbox", "7/12/2018", "CSS"),
					createJsRepositoryObject("AllPHPTricks", "https://www.allphptricks.com/create-simple-pagination-using-php-and-mysqli/", "7/12/2018", "PHP")
				];

				var app = new Vue({
					el: '#app',
					data: {
						items: my_items
					}
				});

				function createJsRepositoryObject(source, url, description, date, techUsed) 
					{
						var repoData = {source:source, url:url, description:description, data:date, techUsed:techUsed};
						return repoData;
					}
			</script>

	</body>
</html>