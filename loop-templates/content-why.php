<?php 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<div class="sub-banner dark-tint d-flex align-items-center" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container pt-5">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-6 bg-blue p-5">
                    <h1 class="text-white">
                        Why do you want to sell your life insurance policy 
                    </h1>
                    <p class="lead text-white">
                        Your life insurance policy is a financial asset – one that can be sold for cash.
                    </p>
                    <p class="mt-4">
                        <a class="btn btn-primary btn-lg">
                            Do I Qualify?
                        </a>
                    </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6"></div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-us-img-1.jpg" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p>Fusce posuere eu libero mattis condimentum.</p>
            <h2>See how much you could get from a life settlement</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at dui a nibh volutpat dapibus non a est. Fusce commodo, nisl ac interdum blandit, ipsum tellus hendrerit eros, et interdum est dolor faucibus tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis gravida tempus neque in hendrerit. Pellentesque dignissim ut ante vulputate convallis. Donec gravida, metus eget aliquam varius, eros lacus posuere lectus, ut ullamcorper orci nunc at orci. Phasellus faucibus odio nec eros feugiat pharetra. 
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at dui a nibh volutpat dapibus non a est. Fusce commodo, nisl ac interdum blandit, ipsum tellus hendrerit eros, et interdum est dolor faucibus tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
        </div>
    </div>
</div>

<div class="bg-light-grey py-5 mb-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p>Fusce posuere eu libero mattis condimentum.</p>
                <h2>See how much you could get from a life settlement</h2>
                <p>
                Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                 </p>
                <p>
                Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                 </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php gravity_form( 'Home Banner Form', false, false, false, '', false ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 ">
    <div class="row">
        <div class="col text-center mb-4">
            <p class="lead">
                Your life insurance policy is a financial asset – one that can be sold for cash.
            </p>
            <h2>
                Why would I want to sell my life insurance?
            </h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-featured-1.jpg" alt="">
            <h3>Your Policy No Longer Reflects Your Needs</h3>
            <p>
            Vestibulum ut congue sapien. Proin et ligula eget augue laoreet cursus. Donec a dapibus ante, id ornare enim. Sed ut massa nisi. Donec mauris mi, lacinia ac semper a, pretium quis nunc. Aenean vitae commodo risus, et ultrices orci. Integer ligula metus, tristique sit amet volutpat ut, fringilla at mauris. Suspendisse quis posuere mi. Integer facilisis orci a ex maximus, eget egestas metus venenatis
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-featured-2.jpg" alt="">
            <h3>You Don’t Want to Keep Making Premium Payments</h3>
            <p>
            Vestibulum ut congue sapien. Proin et ligula eget augue laoreet cursus. Donec a dapibus ante, id ornare enim. Sed ut massa nisi. Donec mauris mi, lacinia ac semper a, pretium quis nunc. Aenean vitae commodo risus, et ultrices orci. Integer ligula metus, tristique sit amet volutpat ut, fringilla at mauris. Suspendisse quis posuere mi. Integer facilisis orci a ex maximus, eget egestas metus venenatis
            </p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-featured-3.jpg" alt="">
            <h3>You Want to Keep Some Life Insurance But Get Rid of All the Payments</h3>
            <p>
            Vestibulum ut congue sapien. Proin et ligula eget augue laoreet cursus. Donec a dapibus ante, id ornare enim. Sed ut massa nisi. Donec mauris mi, lacinia ac semper a, pretium quis nunc. Aenean vitae commodo risus, et ultrices orci. Integer ligula metus, tristique sit amet volutpat ut, fringilla at mauris. Suspendisse quis posuere mi. Integer facilisis orci a ex maximus, eget egestas metus venenatis
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-featured-4.jpg" alt="">
            <h3>You Have Medical or Long-Term Care Expenses</h3>
            <p>
            Vestibulum ut congue sapien. Proin et ligula eget augue laoreet cursus. Donec a dapibus ante, id ornare enim. Sed ut massa nisi. Donec mauris mi, lacinia ac semper a, pretium quis nunc. Aenean vitae commodo risus, et ultrices orci. Integer ligula metus, tristique sit amet volutpat ut, fringilla at mauris. Suspendisse quis posuere mi. Integer facilisis orci a ex maximus, eget egestas metus venenatis
            </p>
        </div>
    </div>
</div>


<?php get_template_part( 'global-templates/red-cta'); ?>