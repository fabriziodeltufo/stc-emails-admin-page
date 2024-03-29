<?php
/*
RHUB Menu + Form.
*/

// MENU PLUGIN DEFINITION
function rhubpage_settings_page()
{
    add_menu_page(
        __( 'SaveTheChildren Coordinators Emails', 'rhubpage' ), // page title
        __( 'STC Coordinators Emails', 'rhubpage' ), // menu title
        'manage_options', // capability
        'rhubpage', // plugin text domain / menu-slug
        'rhubpage_settings_page_markup', // callback fx to output the content (form in the page)
        'dashicons-admin-site', // plugin menu icon
        0 // menu position in the sidebar
    );
}
add_action( 'admin_menu', 'rhubpage_settings_page' );












// HTML FORM PAGE DEFINITION
function rhubpage_settings_page_markup()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }
    include( WPPLUGIN_DIR . 'templates/admin/rhubpage-form-page.php');
}
