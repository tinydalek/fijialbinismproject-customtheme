<?php  get_header();
require_once('components/navbar.inc.php');
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>

<!--Main Navigation-->
<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-3">

        <div class="card-body white-text rgba-black-light pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-9">

                    <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-4 mt-2 mb-4">

                    <!-- Featured image -->
                    <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-1-half mb-4')); ?>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mt-2 mb-4">

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                </div>
                <!--Grid column-->                

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<?php
} // end while
} // end if
get_footer();
?>