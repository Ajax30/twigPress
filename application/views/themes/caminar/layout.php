<!DOCTYPE html>
<html>
	<head>
		<title>{{siteTitle}} | {{tagline}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{main_css}}">
	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="logo"><a href="/">{{siteTitle}}</a></div>
		</header>

		{% if innerTwig is defined %}
			{{include(innerTwig)}}
		{% else %}
			<!-- Main -->
			<section id="main">
				<div class="inner">
					{{posts_view}}
					{{ include('themes/caminar/templates/posts.twig') }}
				</div>
			</section>
		{% endif %}>



		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<ul class="icons">
					<li><a href="{{twitter}}" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="{{facebook}}" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="{{instagram}}" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="mailto:{{company_email}}" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>

				<ul class="icons">
					<li>
						<a href="./pages/page/{{page.id}}">{{page.title}}</a>
					</li>
				</ul>

			</div>
			<div class="copyright">
				&copy; {{companyName}}. All rights reserved. Design by <a href="https://templated.co" target="_blank">TEMPLATED</a>
			</div>
		</footer>

		<!-- Scripts -->
		<!--
		<script src="themes/caminar/assets/js/jquery.min.js"></script>
		<script src="themes/caminar/assets/js/skel.min.js"></script> 
		<script src="themes/caminar/assets/js/main.js"></script>
		-->

	</body>
</html>