<?php
get_header();
?>

<section class="py-5">
    <?php while (have_posts()) : the_post(); ?>
    <div class="post-content mx-auto">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                Last Modified: <?php the_modified_date( 'F j, Y' ); ?>
            </div>
            <?php the_post_thumbnail('full', ['class' => 'main-image']); ?>
            <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
</section>

<?php
get_footer();
?>