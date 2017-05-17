<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cv2
 */

 get_header();
 ?>
 <?php


 $mycategories = get_categories();
 ?>
    <ul id="nav-bar">
        <button id="button-nav" type="button" name="button">menu</button>
    <?php
    foreach ( $mycategories as $cat) :?>

            <li><a href="#<?php echo get_cat_ID($cat->name) ?>"><?php echo $cat->name ?></a></li>
        <?php
    endforeach;
     ?>
     </ul>
     <main>

     <?php

        foreach ( $mycategories as $cat) :?>
            <h2 id=<?php echo get_cat_ID($cat->name) ?> ><?php echo $cat->name;?></h2>
            <?php
            $args = array(
                'posts_per_page'   => 5,
                'offset'           => 0,
                'category_name'    => $cat->name,
                'order'            => 'DESC',
            );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : ?>
                <h1><?php echo $post->name;?></h1>
                <li><a href="<?php echo get_permalink();  ?>"><?php echo $post->post_title; ?></a></li>
                <p><?php echo $post->post_content ?></p>
                <?php the_meta(); ?>
            <?php
            endforeach;
        endforeach;
        ?>
        </main>
        <?php
        echo get_num_queries();

get_footer();
  ?>
