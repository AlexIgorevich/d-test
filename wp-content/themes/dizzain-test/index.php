<?php
/**
 * The main template file
 */
get_header(); ?>
    <section id="content" role="main" class="content-wrapper">
        <article class="post-type-<?php echo get_post_type(); ?>" id="post-<?php echo get_the_ID(); ?>">
			<?php the_content(); ?>
        </article>
    </section>
<?php get_footer();