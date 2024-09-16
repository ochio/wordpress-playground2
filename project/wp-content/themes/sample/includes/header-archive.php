<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                <div class="site-heading">
                    <?php if(is_category()): ?>
                        <h1>Category</h1>
                    <?php elseif(is_date()): ?>
                        <h1>Date</h1>
                    　<?php elseif(is_author()): ?>
                        <h1>Author</h1>
                    <?php else: ?>
                        <h1>Tag</h1>
                    <?php endif; ?>
                    <span class="subheading"><?php wp_title(''); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>