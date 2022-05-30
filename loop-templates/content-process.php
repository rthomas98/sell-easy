<?php 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<div class="process-banner py-5 d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center text-center">
           
            <div class="col">
                <h1>I want to sell, but how do I know if my policy qualifies?</h1>
                <p class="lead mb-5">
                The easiest way to find out is just give us a call or complete our online questionnaire.  It only takes a few minutes and doesn’t cost you a dime.
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5"></div>
                    <div class="col-sm-12 col-md-12 col-lg-2">
                        <?php get_template_part( 'global-templates/zip-form'); ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5"></div>
                </div>

            </div>
           
        </div>
    </div>
</div>


    <div class="container py-5">
        <div class="row d-flex align-items-center mb-5">
            <div class="col">
                <h2>What we’re looking for.</h2>
                <p>
                At the most basic level, we’re looking for policies that are at least $100,000 and insure someone who is 65 years old or older. Younger people may qualify, but there will typically need to be a serious health condition present. The type of condition can play a big role in eligibility. 
                </p>
                <p>
                We don’t want to mislead you, not everyone who meets these basic conditions will qualify, but there’s a good chance. Fortunately, we handle all the heavy lifting for you. All you need to do is provide the info and a signature.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="bg-blue blue-block-alt text-center p-5">
                    <h3>Own a policy that’s $100,000+</h3>
                    <p>Any policy type, including Term, may qualify.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="bg-blue blue-block-alt text-center p-5">
                    <h3>Be age 65 or older</h3>
                    <p>The age requirement is flexible depending on health, but age 65 is where we see more people begin to qualify.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="bg-blue blue-block-alt text-center p-5">
                    <h3>Have a Change in Health</h3>
                    <p>If the insured is younger than 65, there will usually need to be some sort of health condition present.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <h2>Determining if your policy qualifies can<br> be a complicated process.</h2>
                <h2>And we do it all for free ;)</h2>
                <p>
                We’ll gather all the necessary information, perform an in-depth evaluation, and let you know if your policy qualifies faster than you can sing “877-SELL-EASY!” To get started, just submit your policy information and we’ll be on it lickety-split. 
                </p>
            </div>
        </div>
    </div>





<?php get_template_part( 'global-templates/red-cta'); ?>