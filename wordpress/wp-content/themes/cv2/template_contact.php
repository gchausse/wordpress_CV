<?php
/* Template Name: contact */
get_header();
?>

<form class="formulaire" action="" method="post">
    <label for="message">
        <h2>Votre message:</h2>
        <textarea name="message" rows="8" cols="80"></textarea>
        <h4>entrez ce numéro: <?php $numero = rand(1000,9999); echo $numero; ?></h4>
        <input type="number" name="numero" value="numero" min="1000" max="9999">
        <input id="numerocache"type="number" name="numerocache" value="<?php echo $numero ?>">
    </label>
    <input type="submit" name="ok" value="envoyer">
</form>


<?php

    if (isset( $_POST['ok'])  && $_POST['message'] != "" && $_POST['numero'] == $_POST['numerocache']) {
    //     $wpdb->insert('save_forms',
    //     array(
	// 	          'message' => $_POST['message'],
	//     ),
    //     array(
	// 	'%s',
    //     )
    // );
        ?><p>bon numero</p> <?php
    }else{
        ?><p>mauvais numero</p> <?php
    }

 ?>


<?php
get_footer();
?>
