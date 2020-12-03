<?php get_header();?>

<div style="height:500px" class="header_container text-center">
    <div class="container header_text">
        <h1>
            Single Event
        </h1>
        <p style="font-size: 18px">
            See the Details of the event.
        </p>
    </div>
</div>

<!-- Event Section -->
<main>
    <section class="container my-5 py-5">
        <h1><?php the_title();?></h1>
        <p><?php the_content();?></p>
    </section>
</main>

<?php get_footer();?>