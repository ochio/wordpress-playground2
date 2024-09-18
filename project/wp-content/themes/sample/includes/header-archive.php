<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
<<<<<<< HEAD
                <?php if(false): ?>
                    <div>false</div>
                <?php elseif(is_tax()): ?>
                    <?php
                        $query_object = get_queried_object();
                        $taxonomy     = get_taxonomy($query_object->taxonomy);
                    ?>
                    <h1><?php echo $taxonomy->label; ?></h1>
=======
>>>>>>> 1e1913fa5875428734a5fb42f767780ab2519e64
                <?php elseif(is_post_type_archive()): ?>
                <?php $custumFlg = 1; ?>
                <h1>カスタム投稿</h1>
                <?php else: ?>
                <h1>Tab</h1>
                <?php endif; ?>
                <?php if($custumFlg != 1): ?>
                <span class="subheading"><?php wp_title(''); ?></span>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>