<?php 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<div class="banner py-5 d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center text-center">
           
            <div class="col">
                <h1>Why should I sell my life insurance policy to someone else?</h1>
                <p class="lead mb-5">
                Great question! Read on to find out why Forbes says life settlements can be a much needed life line for seniors.
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
    <div class="row d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/why-us-img-1.jpg" alt="">
            <p>
                <small>
                *According to a Penn State University study.
                </small>
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h2>Life Insurance is great. When it works…</h2>
            <p>
            Don’t misunderstand, we really do think life insurance is a great tool that can provide for your loved ones in the event of your death. 
            </p>
            <p>
                <strong>
                However, almost 87% of all Universal Life policies and nearly 98% of all Term Life policies never result in a death claim.* 
                </strong>
            </p>

            <p>
                <strong>That’s a fact.</strong>
            </p>

            <p>
            Don’t let your policy become a statistic. Rather than a lapse or surrender, selling your policy could provide on average four times more cash than you’d get from surrendering.
            </p>
        </div>
    </div>
</div>

<div class="bg-light-grey py-5 mb-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col">
                <h2>You should consider selling your policy if…</h2>
                <ul>
                    <li>You can no longer afford the premiums.</li>
                    <li>Your kids are grown and financially independent.</li>
                    <li>You’ve outlived your beneficiary.</li>
                    <li>You’d rather have money now than continue making premium payments.</li>
                    <li>Changes in the estate tax exemption mean the policy is no longer necessary.</li>
                    <li>…and really any other reason you can think of! Understanding what your policy is worth, even if you don’t want to sell it, is a wise decision. You never know when you’ll need to tap into that asset.</li>
                </ul>
            </div>
            
        </div>
    </div>
</div>

<div class="container py-5 ">
    <div class="row mb-5">
        <div class="col text-center mb-4">
            <h2>
            See how selling their policy helped these people.
            </h2>
        </div>
    </div>
    <div class="row mb-5 d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shutterstock_432590614.png" alt="">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p>
            Vinish and Diya saved for years to put their son through medical school. Now that he’s a successful physician, the Patels were looking to reduce their expenses in retirement. 
            </p>

            <p>
            Their term policy was approaching the end of its conversion period and converting it meant a substantially higher premium. They nearly lapsed their policy before calling us.
            </p>

            <div class="bg-blue blue-block p-4">
                <p>Vinish & Diya sold their $1,000,000 Term policy for</p>
                <h3>$225,000</h3>
                <h4> Insured’s age: 72 &amp; 68</h4>
            </div>
        </div>
    </div>

    <div class="row mb-5 d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p>
            Dave always wanted the best for his mother. And when she was diagnosed with Alzheimer’s Disease, he and his wife Sarah were determined to get her the best care possible. Then he saw the bill.
            </p>

            <p>
            He was able to sell his mother’s life insurance policy to cover her long-term care needs and was able to give her the level of care she deserved.
            </p>

            <div class="bg-blue blue-block p-4">
                <p>Dave sold his mother’s $500,000 Universal Life policy for</p>
                <h3>$350,000</h3>
                <h4>Insured’s age: 83</h4>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shutterstock_1513102676.png" alt="">
        </div>
    </div>
    
</div>


<?php get_template_part( 'global-templates/red-cta'); ?>