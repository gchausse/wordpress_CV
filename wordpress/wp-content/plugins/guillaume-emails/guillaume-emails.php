<?php
/**
 *
 */
/*
Plugin Name: guillaume-emails
Description: This is not.
Author: Matt Mullenweg
Version: 1.6
*/

defined( 'ABSPATH' ) or ( 'No script kiddies please!' );

add_action('admin_menu', 'guillaume_emails_menu');
function guillaume_emails_menu(){
        add_menu_page( 'List of Emails', 'Emails', 'manage_options', 'menu-guillaume-emails', 'guillaume_emails');
        }

function guillaume_emails() {
    echo'<p>Emails will be here</p>';
    global $wpdb;
    $messages = $wpdb->get_results(
	"
	SELECT *
	FROM save_forms
	"
    );
    foreach ( $messages as $message )
    {
	    echo $message->message;
    }
}
?>
