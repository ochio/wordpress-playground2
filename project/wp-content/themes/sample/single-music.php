<<<<<<< HEAD
<?php
  $price     = get_post_meta(get_the_ID(), '価格', true);
  $label     = get_post_meta(get_the_ID(), 'レーベル', true);
  $artists   = get_post_meta(get_the_ID(), 'アーティスト', false);
?>

=======
>>>>>>> 1e1913fa5875428734a5fb42f767780ab2519e64
<html <?php language_attributes() ?>>
    <body <?php body_class() ?>>
    <?php get_template_part( 'includes/header', get_post_type() ); ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <!-- Page Header-->
            <?php get_template_part("includes/header", "single"); ?>
            <!-- Post Content-->
            <article class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <?php the_post_thumbnail(array(800, 300), array('alt'=>'アイキャッチ画像'));?>
<<<<<<< HEAD
                            <dl>
                                <?php if ($price !== ''): ?>
                                <dt>価格</dt>
                                <dd><?php echo esc_html(number_format($price)); ?>円</dd>
                                <?php endif; ?>
                                <?php if ($label !== ''): ?>
                                <dt>レーベル</dt>
                                <dd><?php echo esc_html($label); ?></dd>
                                <?php endif; ?>
                                <?php if ($artists): ?>
                                <dt>アーティスト</dt>
                                <?php foreach ($artists as $artist): ?>
                                    <dd><?php echo esc_html($artist); ?></dd>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </dl>
=======
>>>>>>> 1e1913fa5875428734a5fb42f767780ab2519e64
                            <?php the_content(); ?>
                            <?php 
                                if (comments_open() || get_comments_number()) {
                                    echo get_comments_number();
                                    comments_template();
                                }
                            ?>
                            <?php
                                if (has_post_thumbnail()) {
                                $id  = get_post_thumbnail_id();
                                $img = wp_get_attachment_image_src($id, "large");
                                } else {
                                $img = array(get_template_directory_uri() . '/assets/img/about-bg.jpg');
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </body>
</html>
