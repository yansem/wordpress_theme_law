<?php get_header(); ?>

    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (have_posts()) : while (have_posts()) :
                        the_post(); ?>
                        <!-- post -->
                        <?php if (has_post_thumbnail()) {
                        $img_url = get_the_post_thumbnail_url();
                    } else {
                        $img_url = 'http://picsum.photos/800/570';
                    } ?>
                        <h1><?php the_title(); ?></h1>
                        <img class="pull-left law-post-image" src="<?php echo $img_url; ?>" alt="">
                        <p><?php the_content(''); ?></p>

                        <?php if(comments_open() || get_comments_number()): ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                        <!-- post navigation -->
                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>