<?php
$title           = get_field( 'title' ) ?? 'Title';
$description     = get_field( 'description' ) ?? 'Description';
$overlay_color   = get_field( 'overlay' ) ?? '#000000';
$overlay_opacity = get_field( 'overlay_opacity' ) ?? '.45';
?>
<div class="hero-block">
    <div class="hero-background">
		<?php echo wp_get_attachment_image( get_field( 'background_image' ), 'big' ); ?>
        <div class="hero-overlay"
             style="background: <?php echo $overlay_color; ?>;opacity: <?php echo $overlay_opacity; ?>"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo $title; ?></h1>
            <div class="hero-description">
				<?php echo $description; ?>
            </div>
        </div>
    </div>
</div>