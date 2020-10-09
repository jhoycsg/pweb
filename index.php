<!-- HEADER -->
<?php get_header()?>

<!-- INDEX -->

<!-- ARTICLES -->
<?php if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<article>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</article>
<?php endwhile; endif; ?>

<!-- FOOTER -->
<?php get_footer()?>
