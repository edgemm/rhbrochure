<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	
	<script type="text/javascript">
		function closeOnShare( m ) {
			var modal = jQuery( m ).parents( ".modal-container" );
			setTimeout( function(){
				modal.animate({
					opacity: 0
				}, 400, function(){
					modal.removeClass( "show" );
					modal.find( ".modal-empty" ).attr( "value", "" );
					modal.find( ".wpcf7-response-output, .wpcf7-not-valid-tip" ).hide();
				});
			}, 2500 );
		}
	</script>

	</head>
	<body <?php body_class(); ?><? if ( $_GET['l'] ) echo ' data-rhbc="rh-boatclub-office"'; ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>/sales-office/<?php if ( $_GET['l'] ) echo '?l=' . $_GET['l']; ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rhb-logo.png" alt="Renaissance Homes Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<ul class="menu">
							<li class="menu-item" data-menuitem="share">
								<a href="/">Share</a>
							</li>
							<li class="menu-item" data-menuitem="print">
								<a href="/">Print</a>
							</li>
							<li class="menu-item" data-menuitem="content">
								<a href="/">Content</a>
							</li>
							<?php // display fullscreen when !rhbc - gfh
							//if ( !$_GET['l'] ) :
							if ( !isMobile() || $_GET['l'] != "" ) :
							?>
							<li class="menu-item" data-menuitem="fullscreen">
								<a href="/">Fullscreen</a>
							</li>
							<? endif; ?>
						</ul>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
