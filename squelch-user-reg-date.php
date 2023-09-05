<?php
/**
* Plugin Name: Squelch User Registration Date
* Description: Adds a sortable column to the users screen of the admin dashboard which shows the date on which the user registered
* Version: 1.0
* Author: Matt Lowe { Squelch Design }
* License: GPL2
* Text Domain: squelch-user-reg-date
* Domain Path: /languages
*/

// Exit if accessed directly

if ( ! defined( 'ABSPATH' ) ) exit;



add_action( 'plugins_loaded', function() {

    /**
     * Add a custom column heading for the user registration date
     */
    add_filter( 'manage_users_columns', function($columns) {
        $columns['user_registered'] = __( 'Registration Date', 'squelch-user-reg-date' );
        return $columns;
    } );



    /**
     * Show the customer registration date for the new custom column
     */
    add_action( 'manage_users_custom_column', function($value, $column_name, $user_id) {

        // WordPress default date format and time format:

        $df     = get_option( 'date_format', 'Y-m-d' );
        $tf     = get_option( 'time_format', 'H:i:s' );

        // Custom date/time format option (can be set via WP-CLI or similar, no config is currently provided):

        $dtf    = get_option( 'squelchuserregdate_format', $df . ' ' . $tf );

        $user = get_userdata( $user_id );
        if ( 'user_registered' === $column_name ) return date( $dtf, strtotime( $user->user_registered ) );
        return $value;

    }, 10, 3 );



    /**
     * Enable sorting by user_registered column
     */
    add_filter( 'manage_users_sortable_columns', function($columns) {
        $columns['user_registered'] = 'user_registered';
        return $columns;
    } );

} );

