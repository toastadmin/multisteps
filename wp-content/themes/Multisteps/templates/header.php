<header class="site-header headroom">
    <!--
    <div class="topbar d-none d-lg-block">
        <div class="container-fluid d-flex align-items-center justify-content-end">
            <div class="language-switcher">
                <a class="btn-link" href="#">XXX</a> | <a class="btn-link" href="#">ENG</a>
            </div>
            <div class="topbar__search-form">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label for="s" class="mb-0">
                        <span class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></span>
                        <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search..." />
                    </label>
                    <button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
                </form>
            </div>
        </div>
    </div>
     -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <?php if (has_nav_menu('primary_navigation')) : ?>
            <button id="jsPrimaryMenuToggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#jsPrimaryMenu" aria-controls="jsPrimaryMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php endif; ?>

            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>

            <button id="jsSearchToggler" class="search-toggler" type="button" data-toggle="collapse" data-target="#jsSearchBox" aria-controls="jsSearchBox" aria-expanded="false" aria-label="Toggle search">
                <span class="search-toggler-icon"></span>
            </button>

            <div id="jsPrimaryMenu" class="collapse navbar-collapse">
                <?php if (has_nav_menu('primary_navigation')) : ?>
                    <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'ml-auto', 'menu_class' => 'navbar-nav']); ?>
                <?php endif; ?>
            </div>

            <div id="jsSearchBox" class="navbar__search-form collapse">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label for="s" class="mb-0">
                        <span class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></span>
                        <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" id="s" />
                    </label>
                    <button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
                </form>
            </div>
        </div>
    </nav>
</header>
