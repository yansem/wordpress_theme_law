<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- post -->
    <?php the_content(); ?>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>

<?php $query = new WP_Query([
        'posts_per_page' => 3,
]); ?>
<div id="fh5co-blog" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Recent Post</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <!-- post -->
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()){
                                $img_url = get_the_post_thumbnail_url();
                            }else{
                                $img_url = 'http://picsum.photos/800/570';
                            } ?>
                            <img src="<?php echo $img_url; ?>" alt=""></a>
                        <div class="blog-text">
                            <span class="posted_on"><?php the_time('j M'); ?></span>
                            <span class="comment"><a href=""><?php echo get_comments_number(); ?><i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_content(''); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read More', 'law'); ?></a>
                        </div>
                    </div>
                </div>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

