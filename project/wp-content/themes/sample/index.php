<html <?php language_attributes() ?>>
    <body <?php body_class() ?>>
        <!-- Navigation-->
        <?php get_template_part("includes/nav"); ?>
        <?php if(have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                <?php 
                                    if(mb_strlen($title = get_the_title()) > 25) {
                                        $title = mb_substr($title, 0, 25);
                                        echo $title . '...';
                                    } else {
                                        echo $title;
                                    }
                                ?>
                            </h2>
                            <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                        </a>
                        <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail("thumbnail");
                        }else{ ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noimage.jpg">
                        <?php } ?>
                        <p class="post-meta">
                            Posted by
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
                            on <?php the_time(get_option('date_format')); ?>
                        </p>
                        <div class="post-preview">
                            <a href="<?php the_permalink(); ?>">aa</a>
                        </div>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Article not found.</p>
                <?php endif; ?>
                <!-- Pager-->
                <?php
                $linkElm = get_previous_posts_link('← 新しい投稿へ');
                if ($linkElm) {
                    $linkElm = str_replace('<a', '<a class="btn btn-primary float-left"', $linkElm);
                    echo '<div class="d-flex justify-content-between mb-4">';
                    echo $linkElm;
                } else {
                    echo '<div class="d-flex justify-content-end mb-4">';
                }

                $linkElm = get_next_posts_link('古い投稿へ →');
                if ($linkElm) {
                    $linkElm = str_replace('<a', '<a class="btn btn-primary float-right"', $linkElm);
                    echo $linkElm;
                }
                echo "</div>";
                ?>
    </body>
</html>
