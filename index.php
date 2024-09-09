<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?> - <?php bloginfo(
                                            "description"
                                        ); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <h1> <?php bloginfo("name"); ?></h1>
        <p> <?php bloginfo("description"); ?></p>
    </header>

    <main>
        <!-- WordPress Loop -->
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                echo "<h2>" . get_the_title() . "</h2>";
                the_content();
            endwhile;
        else:
            echo "<p>No content found</p>";
        endif; ?>
    </main>

    <?php wp_footer(); ?>
</body>

</html>