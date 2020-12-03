<?php get_header();?>

<div class="header_container">
    <div class="container header_text">
        <h1>
            Conferences for <br />
            #changemakers
        </h1>
        <p style="font-size: 18px">
            At the core of Change Makers is our virtual event venues.
        </p>
        <p style="font-size: 18px">
            Our weekly 60-minute interactive conferences unit coffee <br />
            professionals worldwide to replicate the in-person event <br />
            experience.
        </p>
    </div>
</div>

<!-- Main Content -->
<main>
    <!-- Events Section -->
    <section class="upcoming_events container my-5">
        <div class="d-flex justify-content-between mb-3">
            <h4>Upcoming Events</h4>
            <a href="#" class="see_all_event_btn">See All</a>
        </div>
        <div class="row">
            <?php
            $homePageEvents = new WP_Query([
                'posts_per_page' => 3,
                'post_type' => 'event',
            ]);

            while ($homePageEvents->have_posts()) {
                $homePageEvents->the_post();?>
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
                        <img src="https://lh3.googleusercontent.com/zw8M1tVdS_XXj1N4YcCOZPforlN4snzD7fDlBBmSlg2KVtaEW0k2GeM-_M_vNBFRvFJAMg21r_Pheq_ED26VA9wwD-y05URQq5fY5yElWEb3MN7foWz7uWBCJS4dT6jZgtfqC5dfhA=w2400"
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
    </section>

    <!-- Recent Event Section -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="font-size: 55px; font-weight: normal">
                        The <span class="font-weight-bold">events</span> are <br />
                        custom-built to
                    </h1>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">1</span>
                        Encourage discussion and knowledge sharing
                    </p>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">2</span>
                        Foster meaningful relationship building
                    </p>
                    <p class="mb-4">
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">3</span>
                        Share and collaboration with ideas
                    </p>
                    <a href="#" class="see_all_event_btn">See All Events</a>
                </div>
                <div class="col-md-6">
                    <img src="https://lh3.googleusercontent.com/KBHs1NnfNODEQ06t9yg7wbeKqODPHy6WpBbulI6x0baR7l--jrhgLPO5zviMCSrq9S0uOKuy5BIfhHQCpRzE9Ru6C4Vng776Ot7IneZ75aKuN6uBosYOwbd37AhA8qP7uHkn4QdW2A=w2400"
                        class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- Moderators section -->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 moderators_text">
                    <h1>
                        Built into the <br />
                        <span class="font-weight-bold">interactive</span> <br />
                        <span class="font-weight-bold">conference</span> <br />
                        venue are <br />
                        rooms to
                    </h1>
                </div>
                <div class="col-md-5 offset-md-1">
                    <p class="my-5">
                        The verified moderators and attendees of each conference are
                        curated to be diverse and knowledgeable - ensuring there is
                        maximum value for all attendees.
                    </p>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">1</span>
                        Listen to a relevant presentation on critical topics
                    </p>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">2</span>
                        Participate in moderated discussion sessions
                    </p>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">3</span>
                        Video chat 1-1 with attendees
                    </p>
                    <p>
                        <span style="
                        color: white;
                        background: #b09c7a;
                        padding: 3px 5px;
                        margin-right: 5px;
                        ">4</span>
                        Match-making and networking opportunities
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rules Section -->
    <section class="container my-5">
        <h4>Each event is underpinned by a set of house rules:</h4>
        <p>
            All voices are equal. We encourage a diverse group of attendees from
            across the coffee industry. All industry players should be <br />
            welcome in the discussions.
        </p>
        <p>
            No self-promotion. This is not a sales platform. If you'd like to
            build relationships, we encourage you to exchange information and
            <br />
            connect via the 1-1 match within the event
        </p>
        <p>
            Be open. Engaging with people across the world and across the supply
            chain offers new perspective and insights.
        </p>
        <p>
            No criticism. In order to foster thought-leadership and ideas,
            everyone must be encouraged to contribute.
        </p>
    </section>
</main>

<?php get_footer();?>