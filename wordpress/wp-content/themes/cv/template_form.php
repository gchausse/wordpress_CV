<?php
/* Template Name: form */
get_header();
?>
<form class="" action="" method="post">
    <label for="message">
        <h2>message:</h2>
        <textarea name="message" rows="8" cols="80"></textarea>
    </label>
    <input type="submit" name="ok" value="ok">

</form>
<?php

    if (isset( $_POST['ok'])  && $_POST['message'] != "") {
        $wpdb->insert('save_forms',
        array(
		          'message' => $_POST['message'],
	    ),
        array(
		'%s',
        )
    );
    }

 ?>
