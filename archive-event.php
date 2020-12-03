<?php get_header();?>

<div style="height:500px" class="header_container mb-5">
    <div class="container text-center header_text">
        <h1>
            All Events
        </h1>
        <p style="font-size: 18px">
            See all the upcoming events here...!
        </p>
    </div>
</div>
<div class="container">
    <div class="mb-5 row">
        <?php
        while (have_posts()) {
        the_post();?>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="free_stricker">Free</span>
                        </div>
                        <div>
                            <span class="icon_stricker"><i class="fas fa-arrow-circle-right"></i></span>
                        </div>
                    </div>
                    <img src='https://lh3.googleusercontent.com/zw8M1tVdS_XXj1N4YcCOZPforlN4snzD7fDlBBmSlg2KVtaEW0k2GeM-_M_vNBFRvFJAMg21r_Pheq_ED26VA9wwD-y05URQq5fY5yElWEb3MN7foWz7uWBCJS4dT6jZgtfqC5dfhA=w2400'
                        class="card-img-top" alt="..." />
                    <div class="card-body d-flex">
                        <div class="mr-3">
                            <span style="color: #b09c7a; display: block">July</span>
                            <span>18</span>
                        </div>
                        <div>
                            <h6 class="card-title"><?php the_title();?></h6>
                            <p class="card-text" style="font-size: 13px">
                                <?php echo wp_trim_words(get_the_content(), 15); ?>
                                <a href="<?php the_permalink();?>" style="text-decoration:none;color:black;font-weight:bold">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer();?>