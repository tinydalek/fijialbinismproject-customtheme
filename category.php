<?php  get_header();
require_once('components/navbar.inc.php');
?>

<!-- Main Navigation -->
<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-3">

        <div class="card-body white-text rgba-black-light pt-5 pb-4">

            <!-- Grid row -->
            <div class="row d-flex justify-content-center">

                <!-- Grid column -->
                <div class="col-md-9">

                    <h1 class="font-weight-bold mb-4"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h1>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>

    </div>
    <!-- Intro -->

    </header>
    <!-- Main Navigation -->

    <br>

    <!-- Main layout -->
    <main>

        <div class="container">

        <?php $args = array(
            'category' => 'get_the_category()',
        );
        $posts_array = get_posts( $args ); ?>
                   
        <?php $i = 1; ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>


            <!-- Section: Post -->
            <section class="mt-2">

            <?php if(($i % 2) == 0) { ?>

                <!-- Grid row -->
                <div class="row wow fadeIn">

                    <!-- Grid column -->
                    <div class="col-md-10 mt-2">

                        <!-- Featured image -->
                        <?php the_post_thumbnail( 'medium-height', array( 'class'=> 'float-right img-fluid z-depth-1-half mt-4 ml-4 mb-2')); ?>
                    
                        <h3 class="font-weight-bold mb-2 mr-2"><?php the_title() ?></h3>
                        <div class="post-content mr-2">
                            <?php the_content(); ?>
                        </div>

                    </div>
                    <!-- End Grid column -->        

                </div>
                <!-- End Grid row -->

            </section>
            <!-- End Section: Post -->

            <!-- Section: Post -->
            <section class="mt-2">

            <?php } elseif (($i % 2) !== 0) { ?>

                <!-- Grid row -->
                <div class="row wow fadeIn">

                    <!-- Grid column -->
                    <div class="col-md-10">
        
                        <!-- Featured image -->
                        <?php the_post_thumbnail( 'medium-width', array( 'class'=> 'float-left img-fluid z-depth-1-half mt-4 mr-4 mb-2')); ?>

                        <h3 class="font-weight-bold mb-2 ml-2"><?php the_title() ?></h3>
                        <div class="post-content ml-2">
                            <?php the_content(); ?>
                        </div>

 

                    </div>
                    <!-- End Grid column -->    

                </div>
                <!-- End Grid row -->

            </section>
            <!-- End Section: Post -->

        <?php } ?>
        <?php $i++; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        </div>

    </main>
    <!-- End Main layout -->

<?php
get_footer();
?>