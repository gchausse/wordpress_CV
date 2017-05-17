<ul>

    <?php
    /* Template Name: cv */

    $mycategories = get_categories();
    get_header();
    
    foreach ($mycategories as $mycategory) {
        ?>
        <h2><?php  echo ($mycategory->name).":" ;?></h2>
        <?php
        $myposts = get_posts( array('category_name' => $mycategory->cat_name));
        foreach ( $myposts as $post ) {
            setup_postdata($post);
            ?>
            <li>
                <?php if (has_tag()): ?>
                    <p><?php edit_post_link('Editer');?></p>
                    <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                    <p style="background-color:red">tags : <?php the_tags(); ?></p>
                    <p>Autheur : <?php the_author() ?></p>
                    <p><?php the_content() ?></p>
                    <p>publié le :<?php the_time() ; ?></p>
                    <p>nombre de commentaires:<?php comments_number()?></p>

                <?php else: ?>
                    <p><?php edit_post_link('Editer');?></p>
                    <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                    <p>Autheur : <?php the_author() ?></p>
                    <p><?php the_content() ?></p>
                    <p>publié le :<?php the_time() ; ?></p>
                    <p>nombre de commentaires:<?php comments_number()?></p>

                <?php endif; ?>

            </li>

            <?php
            wp_reset_postdata();
        }
    }
    ?>

</ul>
