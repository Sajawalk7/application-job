<?php/*
Template Name:home
*/?>


<!DOCTYPE HTML>
<!--
	job by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">

                <?php
                $app = array(
                    'post_type' => 'application',
                    'posts_per_page' => '10'
                    'post_type' => 'attachment',
                    'post_mime_type' =>'application/pdf',
                    'post_status' => 'inherit'
                );

                $post_app = new WP_Query( $app );
                while ( $post_app->have_posts() ) : $post_app->the_post();?>
                    <h3> <a href="<?php the_permalink() ?>" ><?php the_title(); ?> </a></h3>
                    <?php the_field('fname'); ?>
                    <?php the_field('lname'); ?><br>
                    <?php the_field('email'); ?><br>
                    <?php the_field('content'); ?><br>
                    <?php the_field('city'); ?><br>
                    <?php the_field('radio'); ?><br>
                    <?php the_field('massege'); ?><br>
                    <?php the_field('experience'); ?><br>
                    <?php the_field('portfolio'); ?><br>
                    <?php the_field('upload_cv'); ?>
                    <?php the_content(); ?>

                <?php endwhile;
                ?>


            </div>
        </div>
    </div>
</div>





<?php wp_footer(); ?>
</body>
</html>