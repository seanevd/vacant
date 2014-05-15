<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title><?php wp_title( ); ?></title>
		
		<meta name="title" content="<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			elseif (!(is_404()) && (is_single()) || (is_page())) {
				wp_title(''); echo ' - '; }
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home()) {
				bloginfo('name'); echo ' - '; bloginfo('description'); }
			else {
				bloginfo('name'); }
			if ($paged>1) {
				echo ' - page '. $paged; }
		?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
		<script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<p>This is in the header</p>
		</header>