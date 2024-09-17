<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?php esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
            <?php
                $menuName  = "globalNav";
                $locations = get_nav_menu_locations();
                $menu      = wp_get_nav_menu_object($locations[$menuName]);
                $menuItems = wp_get_nav_menu_items($menu->term_id);
                ?>
                <?php foreach($menuItems as $menuItem): ?>
                　　<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo esc_attr($menuItem->url); ?>"><?php echo esc_html($menuItem->title); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>