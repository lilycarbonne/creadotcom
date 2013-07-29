<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('blacklabel',get_bloginfo('template_directory').'/js/blacklabel.js'); ?>
    <?php wp_enqueue_script('other',get_bloginfo('template_directory').'/js/other.js'); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php //allows the theme to get info from the theme options page
global $options;
foreach ($options as $value) {
        if(isset($value['id'])){if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] = get_option( $value['id'] ); }}
    }
?>
	<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<!--Header-->
    <div id="header">
    <div id="logo">
    <?php if(get_option('bls_text_logo')) { ?>
    <a href="<?php bloginfo('url'); ?>"><img alt="<?php bloginfo('name'); ?>" src="<?php echo $bls_logo; ?>" /></a>
<?php } else { ?>
    <a class="textlogo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <span><?php bloginfo('description'); ?></span>
    <?php } ?>

    </div>
    <div id="banner"><?php echo stripslashes($bls_tb); ?></div>
    
    <!--Get Social-->
<?php if(get_option('bls_hide_sc_button')) { ?>
<?php } else { ?>
<div id="get_social">
	<div class="get_social_wrap">
        <a title="Follow Us on Facebook" class="follow_fb_link" href="<?php echo $bls_fb; ?>"></a>
        <a title="Follow Us on Twitter" class="follow_twitter_link" href="<?php echo $bls_twitter; ?>"></a>
        <a title="Subscribe to Our RSS Feed" class="follow_rss_link" href="<?php echo $bls_rss; ?>"></a>
     </div>
</div>
<?php } ?>
<!--Get Social END-->
    </div>
    
<!--Menu-->    
   <div id="topmenu">
   <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
   </div> 