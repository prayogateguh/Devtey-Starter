<!DOCTYPE html>
<html>

<head>
	<title><?php echo get_bloginfo('name'); ?> 404</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1.1">
	<style>
		html,
		body {
			min-height: 100%;
			height: 100%;
		}

		body {
			background-color: #041835;
			overflow: hidden;
		}

		#btn-join {
			border-color: #66BDA4;
			color: #66BDA4
		}

		#btn-join:hover {
			border-color: #e3342f;
		}
	</style>
	<link href="<?php echo get_template_directory_uri(); ?>/css/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-8 md:p-0">
	<div id="lottie" class="w-full h-full hidden md:block"></div>
	<div class="md:w-3/4 mx-auto md:pl-8 text-center md:text-left h-full">
		<div class="md:absolute pin-t h-full flex flex-col justify-center z-10">
			<h1 class="text-white font-normal tracking-wide text-4xl mb-6">You have ventured into 404 space.</h1>
			<p class="text-grey-dark mb-8 text-xl leading-normal font-light">
				We are the Borg. Your biological and technological
				<br class="hidden md:inline"> distinctiveness will be added to our own. Resistance is futile.
			</p>
			<div class="flex flex-col md:flex-row mt-4">
				<a href="<?php echo get_bloginfo('url'); ?>" class="flex-1 text-center md:mr-8 border-2 border-grey-dark hover:border-red rounded-full p-4 no-underline text-grey-dark uppercase tracking-wide font-semibold mb-4 md:mb-0">Beam Me Home</a>
			</div>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bodymovin_light.min.js"></script>
	<script>
		bodymovin.loadAnimation({
			container: document.getElementById('lottie'),
			path: '<?php echo get_template_directory_uri(); ?>/js/404.json',
			renderer: 'svg',
			loop: true,
			autoplay: true
		});
	</script>
</body>

</html>