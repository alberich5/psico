<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    {!!Html::style('css/psicologia/reset.css')!!}
    {!!Html::style('css/psicologia/style.css')!!}


    {!!Html::script('js/psicologia/modernizr.js')!!}
    
    <title>Sipab Nuevo</title>
</head>
<body>
	<a href="#cd-nav" class="cd-nav-trigger">
		Menu<span><!-- used to create the menu icon --></span>
	</a> <!-- .cd-nav-trigger -->
	
	<main>
		<section class="cd-section contact cd-selected">
			<header>
				<div class="cd-title">
					<h2>Recursos Humanos</h2>
					
				</div> <!-- .cd-title -->
			</header>

		</section> <!-- .cd-section -->
	</main>
	
	<nav class="cd-nav-container" id="cd-nav">
		<header>
			<h3>Navigation</h3>
			<a href="#0" class="cd-close-nav">Close</a>
		</header>

		<ul class="cd-nav">
			<li data-menu="index">
				<a href="{{ url('/recursos') }}">
					<span>
						<svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"><g transform="translate(0, 0)"> <polyline data-cap="butt" fill="none" stroke="#9e85d0" stroke-width="2" stroke-miterlimit="10" points="10,24.9 10,60 26,60 26,44 38,44 38,60 54,60 54,24.9 " stroke-linejoin="square" stroke-linecap="butt"></polyline> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 4,30 32,6 60,30 " stroke-linejoin="square"></polyline> <rect data-color="color-2" x="26" y="24" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="12" height="10" stroke-linejoin="square"></rect> </g></svg>
					</span>

					<em>Inicio</em>
				</a>
			</li>

			<li data-menu="projects">
				<a href="projects.html">
					<span>
						<svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64"> <g transform="translate(0, 0)"> <polyline data-color="color-2" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points=" 22,12 22,4 42,4 42,12 " stroke-linejoin="square"></polyline> <line fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="44" y1="44" x2="20" y2="44" stroke-linejoin="square"></line> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="12,44 2,44 2,12 62,12 62,44 52,44 " stroke-linejoin="square"></polyline> <polyline fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="58,44 58,60 6,60 6,44 " stroke-linejoin="square"></polyline> <rect data-color="color-2" x="22" y="22" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="20" height="10" stroke-linejoin="square"></rect> <rect data-color="color-2" x="12" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> <rect data-color="color-2" x="44" y="40" fill="none" stroke="#9e85d0" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="8" height="8" stroke-linejoin="square"></rect> </g> </svg>
					</span>

					<em>Vacaciones</em>
				</a>
			</li>

			
		</ul> <!-- .cd-3d-nav -->
	</nav>

	<div class="cd-overlay"><!-- shadow layer visible when navigation is visible --></div>
	
{!!Html::script('js/psicologia/jquery-2.1.1.js')!!}
{!!Html::script('js/psicologia/main.js')!!}
</body>
</html>