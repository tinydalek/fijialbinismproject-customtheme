    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light white">
        
        <div class="container-fluid">

            <!-- Website Logo: Left -->
            <a class="navbar-brand pt-0 waves-effect" href="/fijialbinismproject/home/">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            } ?>
            </a>

            <!-- Navbar Icon for Small Devices -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu Links: Middle -->            
            <?php
            wp_nav_menu([
            'menu'            => 'primary',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarSupportedContent',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
            ]);
            ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Donate Button: Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="/fijialbinismproject/donate/" class="btn btn-outline-dark" role="button">Donate
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Navbar -->

