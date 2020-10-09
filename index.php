<!-- HEADER -->
<?php get_header()?>

<!-- INDEX -->
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<!-- ARTICLES -->
<?php if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>
<article>
    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
</article>
<?php endwhile; endif; ?>
<p> <?php comments_number(); ?> </p>
<!-- FOOTER -->
<?php get_footer()?>
