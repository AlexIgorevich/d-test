<?php
/**
 * Header file for the Dizzain Test theme.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header-logo">
			<?php echo get_custom_logo(); ?>
        </div>
    </div>
</header>

