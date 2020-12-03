<?php ?>

<html <?php ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Changemakers</title>
    <?php wp_head();?>
</head>

<body>
    <!-- Header & Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light container my-4">
            <a style="border: 2px solid black; padding: 3px" class="navbar-brand" href="<?php echo site_url('/'); ?>">Changemakers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="<?php echo site_url('/event'); ?>">Events</a>
                    </li>
                    <?php
                        if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                    ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link pl-3 text-primary dropdown-toggle" data-toggle="dropdown"><?php echo $current_user->display_name ?></a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo site_url('/profile'); ?>">Profile</a>
                            <a class="dropdown-item" href="<?php echo wp_logout_url(); ?>">Sign Out</a>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="<?php echo esc_url(site_url('/wp-signup.php')) ?>">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="<?php echo esc_url(site_url('/wp-login.php')) ?>">Login</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>