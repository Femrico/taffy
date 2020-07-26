<a class="post" href="<?= get_the_permalink(); ?>">
    <div class="bg">
        <?php the_post_thumbnail('medium_large'); ?>
    </div>
    <div class="content">
        <h2><?php the_title(); ?></h2>
        <p>
            <?php the_excerpt(); ?>
        </p>
    </div>
</a>