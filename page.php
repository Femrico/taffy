<?php
get_header();
?>

<main>
    <div class="col-md-10 mx-auto py-5">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_title('<h1 class="mb-4">', '</h1>'); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
?>