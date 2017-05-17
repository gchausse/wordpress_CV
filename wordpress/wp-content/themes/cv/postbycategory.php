<?php
/* Template Name: postbycategories */
$myposts = get_posts( array('category_name' => "diplomes"));
?>
<h2>post trier par catégories:</h2>

<?php
foreach ( $myposts as $post ) {
    setup_postdata($post);
    ?>

    <li>
        <p><?php edit_post_link('Editer');?></p>
        <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
        <p>Autheur : <?php the_author() ?></p>
        <p><?php the_content() ?></p>
        <p>publié le :<?php the_time() ; ?></p>
        <p>nombre de commentaires:<?php comments_number()?></p>
    </li>

    <?php
    wp_reset_postdata();
}
?>
