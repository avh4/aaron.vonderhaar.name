<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_front_page() || is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<h1 id="blog-title"><span><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">
			<img id="logo" src="<?php bloginfo('template_url') ?>/logo.png" height="101" width="101" alt="<?php bloginfo('name') ?>"/>
		</a></span></h1>
		<div id="blog-description"><?php bloginfo('description') ?></div>
		<div id="follow-links">
			<p>Follow me on:</p>
			<a href="http://twitter.com/avh4"><img height="16" width="16" alt="Twitter" src="<?php bloginfo('template_url') ?>/twitter.png"/></a>
			<a href="http://del.icio.us/avh4"><img height="16" width="16" alt="Delicious" src="<?php bloginfo('template_url') ?>/delicious.png"/></a>
			<a href="http://www.flickr.com/photos/avh4/"><img height="16" width="16" alt="Flickr" src="<?php bloginfo('template_url') ?>/flickr.png"/></a> <br/>
			<a href="http://last.fm/user/avh4"><img height="16" width="16" alt="Last.fm" src="<?php bloginfo('template_url') ?>/lastfm.png"/></a>
			<a href="http://avh4.tumblr.com"><img height="16" width="16" alt="Tumblr" src="<?php bloginfo('template_url') ?>/tumblr.png"/></a>
			<a href="http://youtube.com/user/gruen0"><img height="16" width="16" alt="YouTube" src="<?php bloginfo('template_url') ?>/youtube.png"/></a>
		</div>
	</div><!--  #header -->
	

	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'sandbox'); ?>"><?php _e('Skip to content', 'sandbox'); ?></a></div>
		<?php sandbox_globalnav() ?>
	</div><!-- #access -->
