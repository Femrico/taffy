<?php
get_header();
?>

<section class="py-5">
    <div class="container">
        <div class="posts-grid">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('components/post','content'); ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>